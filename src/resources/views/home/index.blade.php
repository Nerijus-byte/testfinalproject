@extends('layouts.tasker')
@section('title', 'Home')
@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
</div>
<div class="container-fluid">
    <div class="card-deck mb-3 text-center d-flex w-100 gap-3">
        <div class="card mb-4 box-shadow w-50">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Tasks in progress</h4>
            </div>
            <div class="card-body">
                @foreach($tasks as $task)
                <ul class="list-unstyled mt-3 mb-4">
                    <li>{{ $task->name }}</li>
                </ul>
                @endforeach
                <a class="btn btn-secondary"  href="{{ route('tasks.index') }}">My Tasks</a>
            </div>
        </div>
        <div class="card mb-4 box-shadow w-50">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Projects</h4>
            </div>
            <div class="card-body">
                @foreach($projects as $project)
                <ul class="list-unstyled mt-3 mb-4">
                    <li>{{ $project->name }}</li>
                </ul>
                @endforeach
                <a class="btn btn-secondary"  href="{{ route('projects.index') }}">My Tasks</a>
            </div>
        </div>
    </div>
</div>
@endsection
