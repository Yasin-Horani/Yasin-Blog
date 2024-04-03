@extends('layouts.app')
@section('title') Create @endsection
@section('content')
    <form>
        <div class="mb-3">
            <label class="form-lable">Title</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Decription</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select class="form-control">
                <option value="1">Yaisn</option>
                <option value="2">Jan</option>
            </select>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
@endsection
