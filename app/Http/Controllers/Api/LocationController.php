<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Location;
use App\Http\Resources\LocationResource;

class LocationController extends Controller
{
    // get data START
    public function index()
    {
        $locations = Location::get();

        if ($locations->count() > 0) {
            return LocationResource::collection($locations);
        } else {
            return response()->json(['message' => 'No Record Find!'], 200);
        }
    }
    // get data END


    // create data START
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
                        'prov' => 'required|string', 
                        'kota' => 'required|string', 
                        'kec' => 'required|string', 
                        'kel' => 'required|string', 
                        'latitude' => 'required', 
                        'longitude' => 'required',
                    ]);

        if ($validator->fails()) {
            return response()->json([
                    'message' => 'All fields are mandetory',
                    'error' => $validator->messages(),
                ], 422
            );
        }

        $location = Location::create([
            'prov' => $request->prov,
            'kota' => $request->kota,
            'kec' => $request->kec,
            'kel' => $request->kel,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return response()->json([
                'message' => 'Location CREATED Successfully!!',
                'data' => new LocationResource($location)
            ], 200
        );
    }
    // create data END


    // show data START
    public function show(Location $location){
        return new LocationResource($location);
    }
    // show data END


    // update data START
    public function update(Request $request, Location $location){
        $validator = Validator::make($request->all(), [
                        'prov' => 'required|string', 
                        'kota' => 'required|string', 
                        'kec' => 'required|string', 
                        'kel' => 'required|string', 
                        'latitude' => 'required', 
                        'longitude' => 'required',
                    ]);

        if ($validator->fails()) {
            return response()->json([
                    'message' => 'All fields are mandetory',
                    'error' => $validator->messages(),
                ], 422
            );
        }

        $location->update([
            'prov' => $request->prov,
            'kota' => $request->kota,
            'kec' => $request->kec,
            'kel' => $request->kel,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return response()->json([
                'message' => 'Location UPDATED Successfully!!',
                'data' => new LocationResource($location)
            ], 200
        );
    }
    // update data END


    // delete data START
    public function destroy(Location $location){
        $location->delete();
        return response()->json([
                'message' => 'Location DELETED Successfully!!',
        ], 200
        );
    }
    // delete data END
}
