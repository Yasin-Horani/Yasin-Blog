@extends('layouts.app')
@section('title') Show @endsection
@section('content')
    <div class="card mt-4">
        <h5 class="card-header">Post Creator Info</h5>
        <div class="card-body">
            <h5 class="card-title">Title: {{$post->title}}</h5>
            <p class="card-text">description: {{$post->description}}</p>
        </div>
    </div>
    <div class="card mt-4">
        <h5 class="card-header">Post Creator Info</h5>
        <div class="card-body">
            <h5 class="card-title">Name: {{$post->name}}</h5>
            <p class="card-text">Created At: {{$post->created_at}}</p>
        </div>
    </div>
@endsection
