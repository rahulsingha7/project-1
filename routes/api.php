<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('show-pending-student',[AdminController::class, 'pendingStudentView']);
Route::post('approve-pending-student/${id}',[AdminController::class, 'pendingStudentApprove']);
Route::post('delete-pending-student/${id}',[AdminController::class, 'deletePendingStudent']);

Route::get('show-pending-teacher',[AdminController::class, 'pendingTeacherView']);
Route::post('approve-pending-teacher/${id}',[AdminController::class, 'pendingTeacherApprove']);
Route::post('delete-pending-teacher/${id}',[AdminController::class, 'deletePendingTeacher']);

Route::get('show-total-student',[AdminController::class, 'totalStudentView']);
Route::get('show-total-teacher',[AdminController::class, 'totalTeacherView']);
