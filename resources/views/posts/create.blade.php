@extends('layouts.app')
@section('title')
    Create
@endsection
@section('content')
    <form method="post" action="{{route('posts.store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-lable">Title</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Decription</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
@endsection
