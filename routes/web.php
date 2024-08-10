<?php

use Illuminate\Support\Facades\Route;

// Static Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Assignment for day 2
Route::get('/contact', function () {
    return view('contact');
});

// Server API 
Route::get('/api/sample', function () {
    return ['foo' => 'bar'];
});