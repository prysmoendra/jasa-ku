<?php

use App\Http\Controllers\Api\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('locations', LocationController::class);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API-Routes for CRUD Location
// Route::post('add-location', [LocationController::class, 'adding']);
// Route::put('edit-location', [LocationController::class, 'edit']);
// Route::delete('delete-location', [LocationController::class, 'delete']);
// Route::get('getdata', [LocationController::class, 'getData']);