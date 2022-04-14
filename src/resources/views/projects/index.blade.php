@extends('layouts.tasker')
@section('title', 'Projects')
@section('content')
    <div class="container">
        <div class="card-deck mb-3 mt-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <form action="{{ route('create_project') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon1">+ Add Project</button>
                        <input type="text" class="form-control" name="projector" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                    </form>
                    @if( $errors->any())
                        <div class="w-4/8 m-auto text-center">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 list-none">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">My Project List</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('delete_projects') }}" method="POST">
                    @csrf
                    @foreach($projects as $project)
                        <div class="input-group mb-3">
                            <div class="input-group-text gap-1">
                                <input class="form-check-input mt-0" type="checkbox" name="deletes[]" value="{{ $project->id }}" aria-label="Checkbox for following text input">
                                <ul>
                                    <li>
                                        <p>{{ $project->name }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    <button class="btn btn-success">Done</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
