<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::get();

        $view = view('tasks.index', compact('tasks'));

        return $view;
    }

    public function createTask(Request $request)
    {
        $request->validate(

            ['tasker' => 'required']
        );

        $addTask = new Task();

        $addTask->name = $request->tasker;

        $addTask->project_id = 1;

        $addTask->save();

        $tasks = Task::get();

        $view = view('tasks.index', compact('tasks'));

        return $view;

    }

    public function deleteTasks(Request $request)
    {
        $deleteTasks = $request->deletes;

        foreach ($deleteTasks as $deleteTask)
        {
            $task = Task::find($deleteTask);

            $task->delete();
        }

        $tasks = Task::get();

        $view = view('tasks.index', compact('tasks'));

        return $view;

    }

}
