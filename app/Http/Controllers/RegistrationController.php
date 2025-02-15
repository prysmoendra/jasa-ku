<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
// use App\Models\Location;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Validate the input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|string|max:15',
            'address' => 'nullable|string',
            'password' => 'required|string|min:4|confirmed', // Ensure password matches confirmation
        ]);

        // Use a transaction to ensure data consistency
        // DB::transaction(function () use ($request) {
            // Create a new location
            // $location = Location::create([
            //     'prov' => $request->prov,
            //     'kota' => $request->kota,
            //     'kec' => $request->kec,
            //     'kel' => $request->kel,
            //     'latitude' => $request->latitude,
            //     'longitude' => $request->longitude,
            // ]);
        // });
        // Create a new customer


        // $validatedData['password'] = bcrypt($validatedData['password']);

        $registration = Customer::create([
            'customer_name' => $request->first_name,
            'datebirth' => $request->dob,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password), // Hash the password
            // 'location_id' => $location->location_id, // Link to the new location
        ]);

        // Redirect to a success page or login page
        return redirect()->route('home')->with('success', 'Registration successful!');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
