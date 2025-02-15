<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $formType = $request->input('formType', 'login');
        $phone = $request->input('phone');

        $data = compact('formType', 'phone');

        return view('homes.index')->with($data);
    }


    public function landpage(Request $request)
    {
        $customer = Auth::user();

        if ($customer->serviceProvider) {
            // The customer has a service provider.
            return view('homes.home');
        } else {
            // The customer does not have a service provider.
            return view('homes.landpage');
        }
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
