@extends('layouts.app')
@section('title') Edit @endsection
@section('content')
    <form>
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
                <option value="1">Yaisn</option>
                <option value="2">Jan</option>
            </select>
        </div>
        <button class="btn btn-primary">Updata</button>
    </form>
@endsection
