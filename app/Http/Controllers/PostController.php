<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1, 'title' => 'Java', 'posted_by' => 'Yasin', 'created_at' => '2021-06-25 14:06:16'],
            ['id' => 2, 'title' => 'Python', 'posted_by' => 'Jan', 'created_at' => '2021-06-25 14:06:16'],
            ['id' => 3, 'title' => 'PHP', 'posted_by' => 'Tina', 'created_at' => '2021-06-25 14:06:16'],

        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    public function show($postId)
    {
        $singlePost = [
            'id' => 1, 'title' => 'Java', 'description' => 'this is description', 'posted_by' => 'Yasin', 'created_at' => '2021-06-25 14:06:16'
        ];
        return view('posts.show', ['post' => $singlePost]);

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
        //return 'deleter from controller';
        return to_route('posts.index');
    }
}
