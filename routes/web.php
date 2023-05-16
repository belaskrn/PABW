<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\API\BaseController;
use app\Http\Controllers\CustomAuthController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\ThController;

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
    return view('homepage');
});

Route::resource("/homepage/page")

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


//Role and Permission
Route::get('give-permission-to-role', function () {
    $role = Role::findOrFail(1); //guest

    $permission1 = Permission::findOrFail(1); //buat pesanan
    $permission2 = Permission::findOrFail(2); //lihat pesanan
    

    $role->givePermissionTo([$permission1,$permission2]);
});

//memberi role ke user
Route::get('assign-role-to-user', function () {
    $role = Role::findOrFail(3); //guest

    $user = User::findOrFail(1); //user

    $user->assignRole($role);

});

//middleware
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/adminpage', function () {
        return view('adminpage');
    });
});

//
Route::resource('kamar_hotels', ThController::class);

