<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function requestCount(){
        $pendingStudent = User::where('role','student')->where('active', 0)->count();
        $pendingTeacher = User::where('role','teacher')->where('active', 0)->count();
        $totalStudent = User::where('role','student')->where('active', 1)->count();
        $totalTeacher = User::where('role','teacher')->where('active', 1)->count();
        return view('admin.pages.dashboard', compact('pendingStudent','pendingTeacher','totalStudent','totalTeacher'));
    }
    public function pendingStudent(){
        return view('admin.pages.pendingStudent');
    }
    public function pendingStudentView(){
        $data = User::where('role','=','student')
        ->where('active','=',0)
        ->get();
    if($data->count() > 0){
        return response()->json([
                'status' => 'success',
                'data' => $data
        ]);
    }
    else{
        return response()->json([
            'status' => 'error',
            'message' => 'No data found'
        ]);
    }
}
public function pendingStudentApprove(Request $request, $id){
    $active = intval($request->activate);
    $data = User::where('role','=','student')
                    ->where('id','=',$id)
                    ->update([
                        'active' => $active
                    ]);
    if($data){
        return response()->json([
                'status' => 'success',
                'message' => 'Student activated successfully'
        ]);
    }
    else{
        return response()->json([
            'status' => 'error',
            'message' => 'No data found'
        ]);
    }
        
}
    public function deletePendingStudent($id){
      $data = User::where('role','=','student')
             ->where('id','=',$id)
             ->delete();
     if($data){
        return response()->json([
            'status' => 'success',
            'message' => 'Student Deleted Successfully'
        ]);
     }
     else{
        return response()->json([
            'status' => 'error',
            'message' => 'No data found'
        ]);
     }
    }
    public function pendingTeacher(){
        return view('admin.pages.pendingTeacher');
    }
    public function pendingTeacherView(){
        $data = User::where('role','=','teacher')
        ->where('active','=',0)
        ->get();
    if($data->count() > 0){
        return response()->json([
                'status' => 'success',
                'data' => $data
        ]);
    }
    else{
        return response()->json([
            'status' => 'error',
            'message' => 'No data found'
        ]);
    }
}
public function pendingTeacherApprove(Request $request, $id){
    $active = intval($request->activate);
    $data = User::where('role','=','teacher')
                    ->where('id','=',$id)
                    ->update([
                        'active' => $active
                    ]);
    if($data){
        return response()->json([
                'status' => 'success',
                'message' => 'Teacher activated successfully'
        ]);
    }
    else{
        return response()->json([
            'status' => 'error',
            'message' => 'No data found'
        ]);
    }
        
}
    public function deletePendingTeacher($id){
      $data = User::where('role','=','teacher')
             ->where('id','=',$id)
             ->delete();
     if($data){
        return response()->json([
            'status' => 'success',
            'message' => 'Student Deleted Successfully'
        ]);
     }
     else{
        return response()->json([
            'status' => 'error',
            'message' => 'No data found'
        ]);
     }
    }
    public function totalStudent(){
        return view('admin.pages.totalStudent');
    }
    public function totalStudentView(){
        $data = User::where('role','=','student')
        ->where('active','=',1)
        ->get();
    if($data->count() > 0){
        return response()->json([
                'status' => 'success',
                'data' => $data
        ]);
    }
    else{
        return response()->json([
            'status' => 'error',
            'message' => 'No data found'
        ]);
    }
    }
    public function totalTeacher(){
        return view('admin.pages.totalTeacher');
    }
    public function totalTeacherView(){
        $data = User::where('role','=','teacher')
        ->where('active','=',1)
        ->get();
    if($data->count() > 0){
        return response()->json([
                'status' => 'success',
                'data' => $data
        ]);
    }
    else{
        return response()->json([
            'status' => 'error',
            'message' => 'No data found'
        ]);
    }
    }
}
