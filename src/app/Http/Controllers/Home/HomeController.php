<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Models\Task::get();

        $projects = Models\Project::get();

        $view = view('home.index', compact('projects', 'tasks'));

        return $view;
    }
}
