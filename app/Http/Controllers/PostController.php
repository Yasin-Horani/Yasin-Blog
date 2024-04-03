<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
        $users = User::all();
        return view('posts.create', ['users' => $users]);
    }

    public function store()
    {
        $data = request()->all();
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        //dd($data, $title, $description, $post_creator);
        /*
        $post = new Post();
        $post->title;
        $post->description;
        //$post->name;
        $post->save();
        */

        Post::create([
            'title' => $title,
            'description' => $description
        ]);

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        $users = User::all();
        return view('posts.edit',['users' => $users, 'post'=>$post]);
    }

    public function update($postId)
    {
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        //dd($title, $description, $post_creator);
        $singlePost = Post::find($postId);
        $singlePost->update([
            'title' => $title,
            'description' => $description
        ]);
        return to_route('posts.show', $postId);
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);
        $post->delete();
        return to_route('posts.index');
    }
}
