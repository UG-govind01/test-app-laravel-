<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


    
Route::get('/hello', function () {
    return response()->json([
        "name" => "Govind Kumar",
        "email" => "bablu@example.com",
        "phone" => "9876543210",
        "address" => "Gaya",
        "education_level" => "12th Pass",
        "target_exam" => "JEE",
        "role" => "student",
        "updated_at" => "2025-06-24T07:27:20.000000Z",
        "created_at" => "2025-06-24T07:27:20.000000Z",
        "id" => 6
    ]);
});