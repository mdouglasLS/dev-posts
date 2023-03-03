<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments')->orderByDesc('id')->paginate(15);
        $title = 'Home';

        return view('home', compact('title', 'posts'));
    }
}
