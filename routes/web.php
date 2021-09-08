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
Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard', App\Http\Controllers\DashboardController::class);
    ## admin routes
    Route::resource('admin/clients', App\Http\Controllers\Admin\ClientController::class);
    Route::resource('admin/subscription', App\Http\Controllers\Admin\SubscriptionController::class);
    Route::resource('admin/packages', App\Http\Controllers\Admin\PackageController::class);
    Route::resource('admin/transactions',App\Http\Controllers\Admin\TransactionController::class);
    Route::resource('projects',App\Http\Controllers\Client\ProjectController::class);
});
