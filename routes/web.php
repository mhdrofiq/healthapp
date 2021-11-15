<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/record', [UserController::class, 'record']);
Route::get('/evaluate', [UserController::class, 'evaluate']);
Route::get('/abnormal', [UserController::class, 'abnormal']);

Route::get('/home', [UserController::class, 'home']);

