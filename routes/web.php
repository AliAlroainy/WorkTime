<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Users;




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

//* The View Routes --------------------------- 

Route::get('/', function () {
    return view('front.master');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/hire', function () {
    return view('pages.hire');
});

Route::get('/jobDetails', function () {
    return view('pages.jobDetails');
});

Route::get('/jobs', function () {
    return view('pages.jobs');
});

Route::get('/partners', function () {
    return view('pages.partners');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/singin', function () {
    return view('pages.singin');
});


Route::get('/profile', function () {
    return view('pages.profile');
});


// Route::get('/admin', function () {
//     return view('admin.admin');
// });


//* The Admin Routes --------------------------- 

Route::get('/Dashboard', [Admin::class, 'show']);


Route::get('/users', [Users::class, 'show']);

