<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
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
    return view('profile', [
        'user' => User::first()
    ]);
});

Route::get('/record', function () {
    return view('record');
});



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

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');

Route::middleware('auth')->group(function(){
    Route::post('logout', LogoutController::class)->name('logout');
});

//dont forget to change template to register
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);
