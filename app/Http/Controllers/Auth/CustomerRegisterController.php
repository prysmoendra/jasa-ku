<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class CustomerRegisterController extends Controller
{
    // Display the registration form
    public function showRegistrationForm()
    {
        return view('auth.signup');
    }

    // Handle the registration process
    public function register(Request $request)
    {
        // Get the phone number from the request
        $phone = $request->input('phone_signup');

        // Ensure the full phone number starts with "628"
        if (!str_starts_with($phone, '628')) {
            $phone = '628' . substr($phone, 1);

        } // Convert "08..." to "628..."
        else if (str_starts_with($phone, '08')) {
            $phone = '628' . substr($phone, 2);
        }

        // Ensure numeric format
        $phone = preg_replace('/\D/', '', $phone);


        // $request->merge([
        //     'phone_number' => $this->normalizePhoneNumber($request->input('phone_number')),
        // ]);

        $messages = [
            'phone_number.unique' => 'Nomor telepon ini sudah digunakan. Silakan gunakan nomor lain atau masuk ke akun Anda.',
            'phone_number.digits_between' => 'Nomor telepon harus terdiri dari 10 hingga 15 digit.',
        ];

        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|unique:customers,email',
            'phone_signup' => 'required|string|unique:customers,phone_number',
            'password' => 'required|string|min:4|confirmed',
        ], $messages);

        // Create the customer
        $customer = Customer::create([
            'customer_name' => $validatedData['first_name'],
            'datebirth' => $validatedData['dob'],
            'email' => $validatedData['email'],
            'phone_number' => $phone,
            'password' => bcrypt($validatedData['password']),
        ]);

        // Set a success message in the session
        Session::flash('success', 'Pendaftaran berhasil! Silahkan Masuk.');

        // Redirect to a welcome page or customer dashboard
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Selamat datang di Babantu!');
    }

    // Private method to normalize phone numbers
    private function normalizePhoneNumber($number)
    {
        // Remove all non-digit characters
        $number = preg_replace('/\D/', '', $number);

        // Remove leading zeros
        $number = ltrim($number, '0');

        // Ensure the number starts with country code '62'
        if (substr($number, 0, 2) !== '62') {
            $number = '62' . $number;
        }

        return $number;
    }
}
