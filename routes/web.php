<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CustomAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});



Route::get('/profileuser',function () {
    return view('profileuser');
});

Route::get('/login', 'App\Http\Controllers\CustomAuthController@login');
Route::get('/registration', 'App\Http\Controllers\CustomAuthController@registration');

Route::post('/register-user','App\Http\Controllers\CustomAuthController@registerUser') -> name('register-user');

Route::get('/login',function () {
    return view('login');
});
Route::get('/profileuser',function () {
    return view('profileuser');
});

Route::get('/homepage',function () {
    return view('homepage');
});

