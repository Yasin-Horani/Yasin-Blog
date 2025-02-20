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
}
