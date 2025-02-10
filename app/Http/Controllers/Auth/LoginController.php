<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class LoginController extends Controller
{
    protected function username(){
        return 'phone_number';
    }

    public function landpage(){
        return view('homes.landpage');
    }

    // Handle password submission and login
    public function login(Request $request)
    {
        // Validate the password
        $request->validate([
            'phone_login' => 'required|string|exists:customers,phone_number',
            'password_login' => 'required|string|min:4',
        ]);

        // Get the phone number from the session
        $phone = $request->input('phone_login');

        // Retrieve the customer
        $customer = Customer::where('phone_number', $phone)->first();
        $hashedPassword = $customer->password;
        $plainTextPassword = $request->input('password_login');

        // Attempt to log in
        if ($customer && Hash::check($plainTextPassword, $hashedPassword)) {
           // get info user
            Auth::login($customer);

            if (Auth::check()) {
                $customer = Auth::user();
                session()->put('customer', $customer);

                // Authentication passed
                return redirect()->route('beranda')->with('success', 'Selamat datang, ' . $customer->customer_name . '!');
            }

        } else {
            // Authentication failed
            return back()->withErrors(['password' => 'Kata sandi yang Anda masukkan salah.'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda telah keluar.');
    }

    // [Include the normalizePhoneNumber method if needed]
}