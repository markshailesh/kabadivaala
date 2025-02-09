<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

//Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [LoginController::class, 'login'])->name('admin.login.submit');

Route::group(['middleware'=>'auth:admin','as'=>'admin.'],function () {

    //Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //Profile
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('profile-store',[ProfileController::class,'store'])->name('profile.store');

    //Change Password
    Route::post('change-password',[ProfileController::class,'changePassword'])->name('change.password');

    //Product
    Route::resource('product', ProductController::class);

    //Service
    Route::resource('services', ServiceController::class);

    //Enquiry
    Route::resource('enquiry', EnquiryController::class);

    //Contact
    Route::resource('contact', ContactController::class);


    //Staff Management
    Route::resource('roles', RoleController::class);
    Route::resource('staffs', StaffController::class);

    //Logout
    Route::post('logout/', [LoginController::class, 'logout'])->name('logout');

});
