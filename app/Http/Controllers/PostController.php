<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts(Request $request)
    {
        $posts = Post::with('user', 'comments')->paginate(15);
        $title = 'Posts';
        return view('site.posts', compact('title','posts'));
    }
}
