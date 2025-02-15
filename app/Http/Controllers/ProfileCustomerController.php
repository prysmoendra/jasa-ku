<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class ProfileCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Auth::user();
        // dd($customer);

        // $customer_dt = Customer::findOrFail($customer->id);

        return view('profile_customers.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request)
    {
        $customer = Auth::guard('customer')->user();
        
        $validated = $request->validate([
            'field' => 'required|in:customer_name,datebirth,email,phone_number,address',
            'value' => 'required'
        ]);
    
        // Special validation for email
        if ($request->field === 'email') {
            $request->validate(['value' => 'email']);
        }
    
        // Special validation for phone number
        if ($request->field === 'phone_number') {
            $request->validate(['value' => 'numeric|digits_between:10,15']);
        }
    
        $customer->update([$request->field => $request->value]);
    
        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
