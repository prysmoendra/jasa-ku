<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class AuthController extends Controller
{
    // Handle phone number submission, check if phone number exists
    public function checkPhoneNumber(Request $request)
    {
        // Validate input
        $request->validate([
            'phone' => 'required|string',
        ]);

        // Get the phone number from the request
        $phone = $request->input('phone');
        // Store the phone number in the session (optional)
        $request->session()->put('phone', $phone);

        // Check if the phone number exists in the database
        $customer = Customer::where('phone_number', $phone)->first();

        // Phone number exists, redirect to password input
        if ($customer) {
            // Redirect to the same page to show password modal
            return redirect()->route('home', ['formType' => 'password', 'phone' => $phone]);

        // Phone number doesn't exist, redirect to sign-up form
        } else {
            // Redirect to the sign-up modal
            return redirect()->route('home', ['formType' => 'signup']);
        }
    }
}