<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/about', 'about'); 
Route::view('/services', 'services');
Route::view('/testimonials', 'testimonials');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');
