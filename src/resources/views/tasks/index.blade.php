@extends('layouts.tasker')
@section('title', 'Tasks')
@section('content')
<div class="container">
    <div class="card-deck mb-3 mt-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-body">
                <form action="{{ route('create_task') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon1">+ Add Task</button>
                    <input type="text" class="form-control" name="tasker" placeholder=""
                           aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </form>
            </div>
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">My Tasks List</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('delete_tasks') }}" method="POST">
                    @csrf
                    @foreach($tasks as $task)
                    <div class="input-group mb-3">
                        <div class="input-group-text gap-1">
                            <input class="form-check-input mt-0" type="checkbox" name="deletes[]" value="{{ $task->id }}" aria-label="Checkbox for following text input">
                            <ul>
                                <li>
                                    <p>{{ $task->name }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                    <button class="btn btn-success" type="submit">Done</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
