<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Main route returning the 'Home' Vue component via Inertia instead of a Blade view
Route::get('/', function () {
    
    return Inertia::render('Home');
});

Route::inertia('/about','About', ['user' => 'John Doe']);

