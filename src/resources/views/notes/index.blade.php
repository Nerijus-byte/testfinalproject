@extends('layouts.tasker')
@section('title', 'Notes')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Note</h1>
    </div>
    <form action="{{ route('note_update')}}" method="POST">
        @csrf
        <div class="col-8 form-group pb-2 mx-auto">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="text_space" rows="3">{{ $note->description }}</textarea>
        </div>
        <div class="text-center">
        <button class="btn btn-primary mx-auto" type="submit">Add</button>
        </div>
    </form>
@endsection
