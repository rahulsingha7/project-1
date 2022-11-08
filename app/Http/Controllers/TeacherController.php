<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function teacherHome(){
        return view('teacher.pages.home');
    }
    public function createProject(){
        return view('teacher.pages.createProject');
    }
    public function registerProject(Request $request){
        // $teacher_id = $request->session()->get('userid');
        // $obj = new Project();
        // $obj -> teacher_id = $teacher_id;
        // $obj -> project_title = $request -> project_title;
        // $obj -> project_description = $request -> project_description;
        // if($obj->save()){
        //     return response()->json([
        //         'status' => 'success',
        //         'message' => 'Project Created Successfully',
        //     ]);
        // }
        // else{
        //     return response()->json([
        //       'status' => 'error',
        //       'message' => 'Project Creation Failed'
        //     ]);
        // }
        $teacher_name = $request->session()->get('username');
        $project_title = $request->project_title;
        $project_description = $request->project_description;
            $obj = new Project();
            $obj->project_title=$project_title;
            $obj->project_description=$project_description;
            $obj->teacher_name=$teacher_name;
            if($obj->save()){
                return redirect()->back()->with('success','Project created.');
            }
            else{
                return redirect()->back()->with('error','Project creation failed.');
            }
        }
       
}
