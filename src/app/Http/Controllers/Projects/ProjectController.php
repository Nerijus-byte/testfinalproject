<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();

        $view = view('projects.index', compact('projects'));

        return $view;
    }

    public function createProject(Request $request)
    {

        $request->validate(

            ['name' => 'required']
        );

        $addProject = new Project();

        $addProject->name = $request->projector;

        $addProject->save();

        $projects = Project::get();

        $view = view('projects.index', compact('projects'));

        return $view;

    }

    public function deleteProjects(Request $request)
    {
        $deleteProjects = $request->deletes;

        foreach ($deleteProjects as $deleteProject)
        {
            $project = Project::find($deleteProject);

            $project->delete();
        }

        $projects = Project::get();

        $view = view('projects.index', compact('projects'));

        return $view;

    }

}
