<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add() 
    {
        $model = new Project();
        $model->title = 'My Title';
        $model->description = 'My description of the project';
        $model->active = false;
        $model->intro = 'My intro';
        $model->image = 'image url';
        $model->save();
    }

    public function index() {
        $projects = Project::all();   
        
        return view(
            'projects.index',
            [
                'projects' => $projects,
            ]
        );
    }
}
