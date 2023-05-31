<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $param = $request->path();
        $user = User::with('following','followers')->where('username', '=', $param)->get();
        $user = $user[0];

        $posts = Post::where('user_id', '=', $user->id)->with('user', 'comments')->paginate(5);
        return view('admin.profile', compact('user', 'posts'));
    }
}
