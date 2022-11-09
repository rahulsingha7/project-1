<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register-store-teacher',[AuthController::class,'registerStoreTeacher']);
Route::post('register-store-student',[AuthController::class,'registerStoreStudent']);
Route::post('store-login',[AuthController::class,'storeLogin']);

//session
Route::post('store-session',[AdminController::class,'storeSession']);
Route::get('show-session-list',[AdminController::class,'sessionListView']);
Route::get('show-session-edit/{id}',[AdminController::class,'sessionEdit']);
Route::post('session-update/{id}',[AdminController::class,'sessionUpdate']);
Route::post('session-list-delete/{id}',[AdminController::class,'sessionListDelete']);

//semester
Route::post('store-semester',[AdminController::class,'storeSemester']);
Route::get('show-semester-list',[AdminController::class,'semesterListView']);
Route::get('show-semester-edit/{id}',[AdminController::class,'semesterEdit']);
Route::post('semester-update/{id}',[AdminController::class,'semesterUpdate']);
Route::post('semester-list-delete/{id}',[AdminController::class,'semesterListDelete']);

//sections

Route::get('show-section-list',[AdminController::class,'sectionListView']);
Route::post('store-section',[AdminController::class,'storeSection']);
Route::get('show-section-edit/{id}',[AdminController::class,'sectionEdit']);
Route::post('section-update/{id}',[AdminController::class,'sectionUpdate']);
Route::post('section-list-delete/{id}',[AdminController::class,'sectionListDelete']);


//Teacher

Route::get('show-project-list',[AdminController::class,'projectListView']);
// Route::get('show-section-edit/{id}',[AdminController::class,'sectionEdit']);
// Route::post('section-update/{id}',[AdminController::class,'sectionUpdate']);
// Route::post('section-list-delete/{id}',[AdminController::class,'sectionListDelete']);


//