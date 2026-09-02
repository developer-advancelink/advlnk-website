<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/our-works', function () {
    return view('ourworks');
});

Route::get('/contact-us', function () {
    return view('contact');
});