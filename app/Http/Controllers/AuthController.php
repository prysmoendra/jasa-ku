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
            'phone' => [
                'required',
                'string',
                'regex:/^(08|628|8)\d+$/',
                'min:10',
                'max:15'
            ]
        ]);

        // Get the phone number from the request
        // $phone = $request->input('phone');
        $phone = preg_replace('/\D/', '', $request->phone);
    
        // Normalize phone number
        if(str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        } elseif(str_starts_with($phone, '8')) {
            $phone = '62' . $phone;
        }

        // if (str_starts_with($phone, '08')) {
        //     $phone = '628' . substr($phone, 2);
        // }

        // Ensure numeric format
        // $phone = preg_replace('/\D/', '', $phone);

        // Store the phone number in the session (optional)
        $request->session()->put('phone', $phone);

        // Check if the phone number exists in the database
        $customer = Customer::where('phone_number', $phone)->first();

        // Phone number exists, redirect to password input
        if ($customer) {
            // Redirect to the same page to show password modal
            return redirect()->route('login', ['formType' => 'password', 'phone' => $phone]);

        // Phone number doesn't exist, redirect to sign-up form
        } else {
            // Redirect to the sign-up modal
            return redirect()->route('login', ['formType' => 'signup']);
        }
    }
}