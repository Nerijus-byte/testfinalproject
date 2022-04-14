@extends('layouts.tasker')
@section('title', 'Help')
@section('content')
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center h-100">
    <div class="container py-4">
        <form id="contactForm">
            <div class="col-8 form-group pb-2 mx-auto">
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="emailAddress">Email Address</label>
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
