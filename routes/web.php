<?php

use Illuminate\Support\Facades\Route;



// Main route returning the 'Home' Vue component via Inertia
Route::inertia('/', 'Home')->name('home');

// Route for the registration page, returning the 'Auth/Register' Vue component
Route::inertia('/register', 'Auth/Register')->name('register');