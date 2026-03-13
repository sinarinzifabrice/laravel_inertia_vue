<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Main route returning the 'Home' Vue component via Inertia
Route::inertia('/', 'Home')->name('home');

// Show the registration form (Inertia view)
Route::inertia('/register', 'Auth/Register')->name('register');

// Process the registration form submission
Route::post('/register', [AuthController::class, 'register']);