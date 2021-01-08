<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectsController extends Controller
{
    public function index() {
        // 1: alle projecten uit database halen  
        // 2: de projecten meenemen naar een view en deze returnen
      
       // SELECT * FROM projects

       // LARAVEL QUERY BUILDER
        // $projects = \DB::table('projects')
        //             ->get();

        // VIA EEN MODEL (zoals het hoort)
        $projects = Project::all();
         
        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    public function show($id) {
        $project = Project::findOrFail($id);
        
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function edit($id) {
        $project = Project::findOrFail($id);

        return view('projects.edit', [
            'project' => $project
        ]);
    }


   

   

}
