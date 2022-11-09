<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function studentHome(Request $request){
        $username = $request->session()->get('username');
        return view('student.pages.home',compact('username'));
    }
    public function createGroup(){
        return view('student.pages.createGroup');
    }
}
