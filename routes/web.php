<?php

use Illuminate\Support\Facades\Route;

// ================================================website============================================

Route::get('/', function () {
    return view('website.index');
});
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/blog', function () {
    return view('website.blog');
});
Route::get('/blog-details', function () {
    return view('website.blog-details');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/portfolio', function () {
    return view('website.portfolio');
});
Route::get('/portfolio-details', function () {
    return view('website.portfolio-details');
});
Route::get('/services', function () {
    return view('website.services');
});
Route::get('/service-details', function () {
    return view('website.service-details');
});
Route::get('/team', function () {
    return view('website.team');
});