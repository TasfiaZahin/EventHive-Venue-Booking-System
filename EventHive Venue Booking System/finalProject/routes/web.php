<?php

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
    return view('welcome');
});

Route::get('/Information', function () {
    return view('Information');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/packages', function () {
    return view('packages');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/companylogin', function () {
    return view('companylogin');
});

Route::get('/companybooking', function () {
    return view('companybooking');
});


