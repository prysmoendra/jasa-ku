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

        $credentials = [
            'phone_number' => $request->input('phone_login'),
            'password' => $request->input('password_login'),
        ];

        // Attempt to log in
        if (Auth::guard('customer')->attempt([
            'phone_number' => $request->phone_login,
            'password' => $request->password_login
        ])) {
            return redirect()->route('beranda')->with('success', 'Login successful!');
        }
    
        return back()->withErrors(['password_login' => 'Invalid credentials.']);
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