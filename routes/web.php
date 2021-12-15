<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
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


 //Route::get('/') function () {
  //  return view('login');
 //});

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

Route::get('/normal', function () {
    return view('normal');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/changePassword', function() {
    return view('changePassword');
});

// Route::get('/template', function () {
//     return view('template');
// });
Route::get('updateProfile', [UserController::class, 'updateProfileView'])->middleware('auth');
Route::post('updateProfile', [UserController::class, 'updateProfile']);

Route::get('changePassword', [UserController::class, 'changePasswordView']);
Route::post('changePassword', [UserController::class, 'changePassword']);

Route::get('/', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');

Route::middleware('auth')->group(function(){
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);
Route::get('addsenior', [RegisterController::class, 'createsenior']);
Route::post('addsenior', [RegisterController::class, 'storesenior']);


