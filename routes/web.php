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
    return view('dashboard.index');
});
Route::get('home', function () {
    return view('dashboard.index');
});
Route::get('/auth/sign-in', function () {
    return view('auth.sign-in');
});
Route::get('/auth/lock-screen', function () {
    return view('auth.lock-screen');
});
Route::get('/auth/sign-in', function () {
    return view('auth.sign-in');
});
Route::get('/auth/sign-up', function () {
    return view('auth.sign-up');
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
