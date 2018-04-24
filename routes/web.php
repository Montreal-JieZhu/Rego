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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::resource('userdb','MyUserDBController');
