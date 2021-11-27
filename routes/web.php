<?php

use Illuminate\Support\Facades\Route;
use App\Models\Temperature;
use App\Models\User;
use App\Http\Controllers\RegisterController;

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

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
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

//dont forget to change template to register
Route::get('template', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);