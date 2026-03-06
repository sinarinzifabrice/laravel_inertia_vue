<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Main route returning the 'Home' Vue component via Inertia
Route::get('/', function () {
    return Inertia::render('Home');
})->name('home'); // Define name for use with route() in JS

// Using Route::inertia shorthand for simple pages
Route::inertia('/about','About', ['user' => 'John Doe'])->name('about');

