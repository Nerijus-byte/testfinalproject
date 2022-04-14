<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require_once base_path('routes/auth.php');

Route::middleware('auth')->group(function (){
    Route::get('/tasks', [Controllers\Tasks\TaskController::class, 'index'])->name('tasks.index');
    Route::post('/create-task', [Controllers\Tasks\TaskController::class, 'createTask'])->name('create_task');
    Route::post('/create-projects', [Controllers\Projects\ProjectController::class, 'createProject'])->name('create_project');
    Route::post('/delete-tasks', [Controllers\Tasks\TaskController::class, 'deleteTasks'])->name('delete_tasks');
    Route::post('/delete-projects', [Controllers\Projects\ProjectController::class, 'deleteProjects'])->name('delete_projects');
    Route::post('/note-update', [Controllers\Notes\NoteController::class, 'noteUpdate'])->name('note_update');
    Route::get('/home', [Controllers\Home\HomeController::class, 'index'])->name('home.index');
    Route::get('/notes', [Controllers\Notes\NoteController::class, 'index'])->name('notes.index');
    Route::get('/projects', [Controllers\Projects\ProjectController::class, 'index'])->name('projects.index');
    Route::get('/help', [Controllers\Help\HelpController::class, 'index'])->name('help.index');
    Route::get('/about', [Controllers\About\AboutController::class, 'index'])->name('about.index');
});


Route::get('/', function () {
    return view('welcome');
});



