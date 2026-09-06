<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/projects', function() {
    return view('projects');
});

Route::get('gallery', function(){
    return view('gallery');
});

Route::get('about', function(){
    return view('about');
});

Route::get('contact', function(){
    return view('contact');
});

Route::fallback(function(){
    return response()->view('fallback');
});