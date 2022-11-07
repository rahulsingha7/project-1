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
  
    Route::post('store-login',[AuthController::class,'storeLogin']);
    Route::get('admin-login', [AuthController::class, 'adminLogin']);
    Route::get('student-login', [AuthController::class, 'studentLogin']);
    Route::get('teacher-login', [AuthController::class, 'teacherLogin']);
    Route::get('teacher-register', [AuthController::class, 'teacherRegister']);
    Route::get('student-register', [AuthController::class, 'studentRegister']);
    Route::get('/', [AuthController::class,'home']);
    Route::middleware(['CheckLogin'])->group(function () {
        Route::get('home', [AuthController::class,'home']);
        Route::middleware(['CheckAdmin'])->group(function () {
            //Admin Routes
            Route::get('dashboard',[AdminController::class,'dashboard']);
            Route::get('dashboard',[AdminController::class,'requestCount']);
            // Route::get('admin-pending-student',[AdminController::class,'pendingStudent']);
            // Route::get('admin-pending-teacher',[AdminController::class,'pendingTeacher']);
            // Route::get('admin-total-student',[AdminController::class,'totalStudent']);
            // Route::get('admin-total-teacher',[AdminController::class,'totalTeacher']);
            Route::get('admin-pending-student',[AdminController::class,'pendingStudent']);     
            Route::get('admin-pending-teacher',[AdminController::class,'pendingTeacher']);
            Route::get('delete-pendingStudent/{pid}',[AdminController::class,'deletePendingStudent']);
            Route::get('update-pendingStudent/{pid}',[AdminController::class,'updatePendingStudent']);
            Route::get('delete-pendingTeacher/{pid}',[AdminController::class,'deletePendingTeacher']);
            Route::get('update-pendingTeacher/{pid}',[AdminController::class,'updatePendingTeacher']);
            Route::get('admin-total-student',[AdminController::class,'totalStudent']);     
            Route::get('admin-total-teacher',[AdminController::class,'totalTeacher']);
            //session
            Route::get('admin-create-session',[AdminController::class,'createSession']);
            Route::get('admin-session-list',[AdminController::class, 'sessionList']);
            //semester
            Route::get('admin-create-semester',[AdminController::class,'createSemester']);
            Route::get('admin-semester-list',[AdminController::class, 'semesterList']);
            //section
            Route::get('admin-create-section',[AdminController::class, 'createSection']);
            Route::get('admin-section-list',[AdminController::class, 'sectionList']);
            Route::post('store-section',[AdminController::class,'storeSection']);
    });
    });
  
