<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\abnormalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SeniorController;
use App\Http\Controllers\DeviceController;
use App\Models\Temperature;
use App\Models\Senior;
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

Route::get('/profile', function () {
    return view('profile', [
        'user' => User::first()
    ]);
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

Route::get('/template', function () {
    return view('template');
});

Route::get('/', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');

Route::middleware('auth')->group(function(){
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);
// Route::get('addsenior', [RegisterController::class, 'createsenior']);
// Route::post('addsenior', [RegisterController::class, 'storesenior']);

Route::get('record', [RecordController::class, 'heartRate']);

//Route::get('abnormality', [abnormalController::class, 'checkData']);

// PLANNED FORMAT CORRECTIONS OF EXISTING AND FUTURE ROUTES
//=========================================================
// Route::get('/', [UserController::class, 'create'])->middleware('guest');
// Route::post('login', [UserController::class, 'store'])->middleware('guest');
// Route::post('logout', [UserController::class, 'destroy'])->middleware('auth');
// Route::get('home', [UserController::class, 'home']);
// Route::get('register', [UserController::class, 'create']);
// Route::post('register', [UserController::class, 'store']);
// Route::get('profile', [UserController::class, 'profile']);
// Route::get('seniorsList', [UserController::class, 'seniorsListView']);
Route::get('updateProfile', [UserController::class, 'updateProfileView'])->middleware('auth');
Route::post('updateProfile', [UserController::class, 'updateProfile']);
Route::get('changePassword', [UserController::class, 'changePasswordView']);
Route::post('changePassword', [UserController::class, 'changePassword']);
Route::get('addCaretaker', [UserController::class, 'adminCreate'])->middleware('auth:admin');
Route::post('addCaretaker', [UserController::class, 'store'])->middleware('auth:admin');
Route::get('editCaretaker/{user}', [UserController::class, 'edit'])->middleware('auth:admin');
Route::patch('editCaretaker/{user}', [UserController::class, 'update'])->middleware('auth:admin');
Route::delete('deleteCaretaker/{user}', [UserController::class, 'destroyUser'])->middleware('auth:admin');

// Route::get('record', [SeniorController::class, 'recordView']);
// Route::get('evaluate', [SeniorController::class, 'evaluateView']);
// Route::get('abnormal', [SeniorController::class, 'abnormalView']);
Route::get('addSenior', [SeniorController::class, 'create'])->middleware('auth:admin');
Route::post('addSenior', [SeniorController::class, 'store'])->middleware('auth:admin');
Route::get('editSenior/{senior}', [SeniorController::class, 'edit'])->middleware('auth:admin');
Route::patch('editSenior/{senior}', [SeniorController::class, 'update'])->middleware('auth:admin');
Route::delete('deleteSenior/{senior}', [SeniorController::class, 'destroy'])->middleware('auth:admin');

//guest means if user is already logged in, guest will prevent them from accessing login again until they've logged out
//auth means the user cannot log out unless they've already been authenticated (logged in)
Route::get('adminLogin', [AdminController::class, 'create'])->middleware('guest'); 
Route::post('adminLogin', [AdminController::class, 'store'])->middleware('guest'); 
Route::get('adminLogout', [AdminController::class, 'destroy'])->middleware('auth:admin');
Route::get('adminHome', [AdminController::class, 'homeView']);
Route::get('manageCaretakers', [AdminController::class, 'manageCaretakersView']);
Route::get('manageSeniors', [AdminController::class, 'manageSeniorsView']);
Route::get('manageDevices', [AdminController::class, 'manageDevicesView']);
Route::get('assign', [AdminController::class, 'assignView']);
Route::post('assignDevice', [AdminController::class, 'assignDevice']);
Route::post('assignSenior', [AdminController::class, 'assignSenior']);

Route::get('addDevice', [DeviceController::class, 'store'])->middleware('auth:admin');
Route::delete('deleteDevice/{device}', [DeviceController::class, 'destroy'])->middleware('auth:admin');