<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SeniorController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;

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

Route::get('/template', function () {   //this is an empty page for testing wip stuff
    return view('template');
});


// AUTHENTICATION ROUTES
//==================================================================================================
Route::get('/', [LoginController::class, 'create'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');
Route::get('logout', [LogoutController::class, 'destroy'])->middleware('auth');
Route::get('home', [UserController::class, 'homeView']);
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);


// USER (CARETAKER) ROUTES
//==================================================================================================
Route::get('profile', [UserController::class, 'profileView']);
Route::get('/updateProfile', [UserController::class, 'updateProfileView'])->middleware('auth');
Route::post('/updateProfile', [UserController::class, 'updateProfile']);
Route::get('/changePassword', [UserController::class, 'changePasswordView']);
Route::post('/changePassword', [UserController::class, 'changePassword']);
Route::get('addCaretaker', [UserController::class, 'adminCreate'])->middleware('auth:admin');
Route::post('addCaretaker', [UserController::class, 'adminStore'])->middleware('auth:admin');
Route::get('editCaretaker/{user}', [UserController::class, 'edit'])->middleware('auth:admin');
Route::patch('editCaretaker/{user}', [UserController::class, 'update'])->middleware('auth:admin');
Route::delete('deleteCaretaker/{user}', [UserController::class, 'adminDestroy'])->middleware('auth:admin');
Route::get('/seniorList', [UserController::class, 'seniorList']);


// SENIOR ROUTES
//==================================================================================================
Route::get('addSenior', [SeniorController::class, 'create'])->middleware('auth:admin');
Route::post('addSenior', [SeniorController::class, 'store'])->middleware('auth:admin');
Route::get('editSenior/{senior}', [SeniorController::class, 'edit'])->middleware('auth:admin');
Route::patch('editSenior/{senior}', [SeniorController::class, 'update'])->middleware('auth:admin');
Route::delete('deleteSenior/{senior}', [SeniorController::class, 'destroy'])->middleware('auth:admin');
Route::get('/record/{id}', [SeniorController::class, 'index']);
Route::get('evaluate', [SeniorController::class, 'evaluateView']);
// Route::get('abnormal', [SeniorController::class, 'abnormalView']);


// ADMIN ROUTES
//==================================================================================================
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
Route::get('editAssignment/{device}', [AdminController::class, 'editAssignment']);
Route::patch('editDeviceAssign/{device}', [AdminController::class, 'updateDeviceAssign']);
Route::patch('editSeniorAssign/{senior}', [AdminController::class, 'updateSeniorAssign']);


// DEVICE ROUTES
//==================================================================================================
Route::get('addDevice', [DeviceController::class, 'store'])->middleware('auth:admin');
Route::delete('deleteDevice/{device}', [DeviceController::class, 'destroy'])->middleware('auth:admin');
//Route::get('getSensorData/{device}', [DeviceController::class, 'getSensorData']);
Route::get('getSensorData', [DeviceController::class, 'getSensorData']);
Route::get('checkForAbnormal/{senior}', [DeviceController::class, 'checkForAbnormal']);

Route::get('firebasesdk', [FirebaseController::class, 'index']);