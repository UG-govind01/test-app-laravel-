<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadindustryController;
use App\Http\Controllers\registion;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('leadindustry', LeadindustryController::class);

Route::get('/register', [registion::class, 'ShowRegistionForm']);
Route::post('/register', [registion::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login']);