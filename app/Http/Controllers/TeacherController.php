<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function teacherHome(Request $request){
        $username = $request->session()->get('username');
        return view('teacher.pages.home',compact('username'));
    }
    public function createProject(){
        return view('teacher.pages.createProject');
    }
    public function registerProject(Request $request){
        
        $teacher_id = $request->session()->get('userid');
        $project_title = $request->project_title;
        $project_description = $request->project_description;
            $obj = new Project();
            $obj->teacher_id=$teacher_id;
            $obj->project_title=$project_title;
            $obj->project_description=$project_description;
            if($teacher_id==''|| $project_title==''|| $project_description==''){
                return redirect()->back()->with('error','All fields must be filled');
            }
            else if($obj->save()){
                return redirect()->back()->with('success','Project created.');
            }
            else{
                return redirect()->back()->with('error','Project creation failed.');
            }
        }
        public function projectList(){
            return view('teacher.pages.projectList');
        }
        public function projectListView(Request $request){
            $teacher_id = $request->session()->get('userid');
            $data = DB::table('projects')
                    ->where('teacher_id','=',$teacher_id)
                    ->get();
            $data = Project::where('teacher_id','=',$teacher_id)->get();
            // $data= Project::all();
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
        public function projectEdit($id){
            $data = Project::where('id','=',$id)->first();
            if($data){
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
        public function projectUpdate(Request $request, $id){
            $data = Project::where('id','=',$id)
                            ->update([
                                'project_title' => $request->project_title,
                                'project_description' => $request->project_description
                            ]);
            if($data){
                return response()->json([
                        'status' => 'success',
                        'message' => 'Project updated successfully'
                ]);
            }
            else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'No data found'
                ]);
            }
                
        }
        public function projectListDelete( $id){
            $data = Project::where('id','=',$id)
                            ->delete();
            if($data){
                return response()->json([
                        'status' => 'success',
                        'message' => 'Project Deleted successfully'
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
