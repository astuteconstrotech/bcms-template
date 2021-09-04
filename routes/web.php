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
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('/auth/lock-screen', function () {
    return view('auth.lock-screen');
});

Route::get('register', function () {
    return view('auth.register');
});
Route::get('/user/profile', function () {
    return view('user.user-profile');
});
Route::get('/user/create', function () {
    return view('user.user-add');
});
Route::get('/user/', function () {
    return view('user.user-list');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
