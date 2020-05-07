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
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('layouts.aboutus');
});

Route::get('/decor', function () {
    return view('dekor');
});

Route::get('/Store', function () {
    return view('store');
});

Route::get('/Account', function () {
    return view('auth.login');
});

Route::get('/ContactUs', function () {
    return view('contact-form');
});

Auth::routes();

Route::post('/booking','pesan@booking');
Route::get('/dekor', 'StoreController@dekor')->name('dekor');
Route::get('/contact', 'Contact@showContactForm');
Route::post('/contact', 'Contact@sendMail');
Route::post('/Home','HomeController@update');


