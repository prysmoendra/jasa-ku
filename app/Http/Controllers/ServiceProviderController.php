<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Location;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $customer = Auth::user();
        $categories = Category::all();
        $sub_ctgs = SubCategory::all();
        $locations = Location::all();

        return view('services_providers.index', [
            'categories' => $categories,
            'sub_ctgs' => $sub_ctgs,
            'locations' => $locations,
        ]);
    }


    public function showStepOne()
    {
        $customer = Auth::user();

        return view('services_providers.step_one', [
            'customer' => $customer
        ]);
    }

    public function postStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'phone_number' => 'required|numeric',
        ]);

        $request->session()->put('phone_number', $validatedData['phone_number']);

        return redirect()->route('services_providers.step_two');
    }

    public function showStepTwo()
    {
        $customer = Auth::user();
        $categories = Category::all();

        return view('services_providers.step_two', [
            'customer' => $customer,
            'categories' => $categories,
        ]);
    }

    public function postStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'service_provider_name' => 'required|string',
            'category_id' => 'required|string',
        ]);

        $request->session()->put('service_provider_name', $validatedData['service_provider_name']);
        $request->session()->put('category_id', $validatedData['category_id']);

        return redirect()->route('services_providers.step_three');
    }

    public function showStepThree()
    {
        $customer = Auth::user();

        return view('services_providers.step_three', [
            'customer' => $customer
        ]);
    }

    public function postStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'required|string',
        ]);

        $customer = Auth::user();
        $email = $customer->email;
        $customer_id = $customer->customer_id;
        // $phone_number = $request->session()->get('phone_number');
        // $service_provider_name = $request->session()->get('service_provider_name');
        // $category_id = $request->session()->get('category_id');
        $sessionData = [
            'phone_number' => $request->session()->get('phone_number'),
            'service_provider_name' => $request->session()->get('service_provider_name'),
            'category_id' => $request->session()->get('category_id'),
        ];

        $lastLocation = Location::latest()->first();
        $location_id = $lastLocation->location_id;


        // collect all data
        $data = [
            'provider_name' => $sessionData['service_provider_name'],
            'customer_id' => $customer_id,
            'category_id' => $sessionData['category_id'],
            // 'sub_category_id' => null, 
            'email' => $email,
            'phone_number' => $sessionData['phone_number'],
            'address' => $validatedData['address'],
            'location_id' => $location_id,
        ];

        // Save data to the database
        ServiceProvider::create($data);

        // Clear the session data
        $request->session()->forget([
            'phone_number',
            'service_provider_name',
            'category',
        ]);

        // Validate session data
        $validator = Validator::make($sessionData, [
            'phone_number' => 'required|numeric',
            'service_provider_name' => 'required|string',
            'category_id' => 'required|integer',
        ]);
        
        if ($validator->fails()) {
            // Handle validation failure
            return redirect()->route('services_providers.step_one')
                ->withErrors($validator)
                ->withInput();
        }

        return redirect()->route('services_providers.complete');
    }

    public function completeRegistration()
    {
        $customer = Auth::user();

        return view('services_providers.complete', [
            'customer' => $customer
        ]);
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
