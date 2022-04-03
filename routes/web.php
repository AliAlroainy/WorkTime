<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hire', function () {
    return view('hire');
});

Route::get('/jobDetails', function () {
    return view('jobDetails');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/singin', function () {
    return view('singin');
});




