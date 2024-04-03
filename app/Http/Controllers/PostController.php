<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();
        //dd($postsFromDB);

        return view('posts.index', ['posts' => $postsFromDB]);
    }

    /*
    public function show($postId)
    {
        //$singlePost = Post::where('id',$postId)->get();
        //$singlePost = Post::where('id',$postId)->first(); // SELECT * FROM posts WHERE id = $postId LIMIT 1;
        //$singlePost = Post::find($postId); //// SELECT * FROM posts WHERE id = $postId LIMIT 1;
        $singlePost = Post::findOrFail($postId);
        return view('posts.show', ['post' => $singlePost]);

    }
    */

    // https://laravel.com/docs/11.x/routing#route-model-binding
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->all();
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        //dd($data, $title, $description, $post_creator);
        return to_route('posts.index');
    }

    public function edit()
    {
        return view('posts.edit');
    }

    public function update()
    {
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        //dd($title, $description, $post_creator);
        return to_route('posts.show', 1);
    }

    public function destroy()
    {
        return to_route('posts.index');
    }
}
