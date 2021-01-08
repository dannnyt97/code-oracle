<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// Returns the login form page
Route::get('user/login', function () {
    return view('user.login');
});

// Gets POST request from login form
Route::post('user/login', [UserController::class, 'login'])->name('user.login');

// Returns the register form page
Route::get('user/register', function ($id) {
    return view('user.register');
});

// Gets POST request from register form
Route::post('user/register', [UserController::class, 'register'])->name('user.register');
