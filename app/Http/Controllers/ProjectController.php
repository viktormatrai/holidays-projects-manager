<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(){
        return view('example.newProject');
    }

    public function show(){
        $user_id = Auth::id();
        $projects = Project::where('user_id', '=', $user_id)->get();
        return view('example.projects')->with('projects', $projects);
    }

    public function store(Request $request){

        Project::create([
            'project_name'=>$request->get('project_name'),
            'project_description'=>$request->get('project_description'),
            'project_deadline' => $request->get('project_deadline')
        ]);

        return redirect('projects/index');
    }

    public function edit($id){

        $project = Project::find($id);

        return view('example.update_project')->with('project', $project);
    }

    public function update(Request $request){

        $id = $request->get('id');

        FreeDay::where('id', '=', $id)->update([
            'project_name'=> $request->get('project_name'),
            'project_description' => $request->get('project_description'),
            'project_deadline'=> $request->get('project_deadline')
        ]);

        return redirect('projects/index');
    }



    public function destroy($id){

        $freeday = FreeDay::find($id);

        $freeday->delete();

        return redirect('/projects/index');
    }
}
