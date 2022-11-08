<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function studentHome(){
        return view('student.pages.home');
    }
    public function createGroup(){
        return view('student.pages.createGroup');
    }
}
