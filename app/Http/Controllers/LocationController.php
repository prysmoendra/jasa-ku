<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();

        return view('locations.index', ['locations' => $locations]);
    }

    public function adding(Request $request)
    {
        $location = new Location();
        $location->prov = $request->prov;
        $location->kota = $request->kota;
        $location->kec = $request->kec;
        $location->kel = $request->kel;
        $location->latitude = $request->latitude;
        $location->longitude = $request->longitude;
        $location->save();

        return response()->json('Location Added Successfully');
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        // $location = Location::findOrFail($request->id);
        // $location->prov = $request->prov;
        // $location->kota = $request->kota;
        // $location->kec = $request->kec;
        // $location->kel = $request->kel;
        // $location->latitude = $request->latitude;
        // $location->longitude = $request->longitude;
        // $location->update();

        // return response()->json('Location Updated Successfully');
        return view('locations.edit', ['location' => $location]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'prov' => 'required|string',
            'kota' => 'required|string',
            'kec' => 'required|string',
            'kel' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Find the location by ID
        $location = Location::findOrFail($id);

        // Update the location
        $location->update([
            'prov' => $request->prov,
            'kota' => $request->kota,
            'kec' => $request->kec,
            'kel' => $request->kel,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        // Redirect back with a success message
        return redirect()->route('locations.index')->with('success', 'Location updated successfully!');
    }

    public function delete(Request $request)
    {
        $location = Location::findOrFail($request->id);
        $location->delete();
        return response()->json('Location Deleted Successfully');
    }

    public function getData()
    {
        $location = Location::all();
        return response()->json($location);
    }
}
