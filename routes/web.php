<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
    Route::get('home', [AuthController::class,'home']);
    Route::get('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('store-login',[AuthController::class,'storeLogin']);
    Route::middleware(['CheckAdmin'])->group(function () {
        //Admin Routes
        Route::get('dashboard',[AdminController::class,'dashboard']);
        Route::get('dashboard',[AdminController::class,'requestCount']);
        Route::get('admin-pending-student',[AdminController::class,'pendingStudent']);
        Route::get('admin-pending-teacher',[AdminController::class,'pendingTeacher']);
        Route::get('admin-total-student',[AdminController::class,'totalStudent']);
        Route::get('admin-total-teacher',[AdminController::class,'totalTeacher']);
});
