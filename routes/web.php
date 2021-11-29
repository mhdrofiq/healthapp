<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Models\Temperature;
use App\Models\User;

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
    return view('login');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/record', function () {
    return view('record');
});

Route::get('/', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/record', [UserController::class, 'record']);
Route::get('/evaluate', [UserController::class, 'evaluate']);
Route::get('/abnormal', [UserController::class, 'abnormal']);
Route::get('/profile', [ProfileController::class, 'prof']);

Route::get('/evaluate', function () {
    return view('evaluate');
});

Route::get('/abnormal', function () {
    return view('abnormal');
});

Route::get('/updateProfile', function () {
    return view('updateProfile');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/template', function () {
//     return view('template');
// });

//dont forget to change template to register
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);