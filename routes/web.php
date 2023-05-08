<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\BaseController;

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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dashbord', function () {
    return view('dashbord');
});

Route::get('/profileuser',function () {
    return view('profileuser');
});

Route::get('/myorder',function () {
    return view('myorder');
});
Route::get('/dashbord','App\Http\Controllers\CustomAuthController@dashbord');
Route::get('/login', 'App\Http\Controllers\CustomAuthController@login');
Route::get('/registration', 'App\Http\Controllers\CustomAuthController@registration');

Route::post('/register-user','App\Http\Controllers\CustomAuthController@registerUser') -> name('registrasi-user');

Route::post('/login-user','App\Http\Controllers\CustomAuthController@loginUser')-> name('loginuser');

Route::get('/login',function () {
    return view('login');
});
Route::get('/profileuser',function () {
    return view('profileuser');
});

Route::get('/homepage',function () {
    return view('homepage');
});

Route::get('/pesan',function () {
    return view('pesan');
});

Route::get('/adminpage',function () {
    return view('adminpage');
});

Route::get('/ticket',function () {
    return view('ticket');
});

Route::get('/saldo',function () {
    return view('saldo');
});

//ini buat nampilin user ke page admin
Route::get('userview','App\Http\Controllers\userviewcontroller@index');


Route::post('loginuser', [RegisterController::class, 'login']) -> name ('login-user');
Route::post('registeruser', [RegisterController::class, 'register']) -> name ('register-user');

