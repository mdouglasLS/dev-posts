<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function newPost()
    {
        $title = 'Publicar Post';
        return view('post.post-new', compact( 'title'));
    }

    public function getPostBySlug(User $user, string $slug)
    {
        $post = Post::where('slug', $slug)->where('user_id', $user->id)->with(['user', 'reactions', 'comments' => function($query) {
            $query->orderByDesc('created_at');
    }])->first();

        return view('post.posts', compact('post'));
    }

    public function getAllPosts()
    {
        $posts = Post::with('user', 'comments', 'reactions')->paginate(15);
        $title = 'Posts';
        return view('site.posts', compact('title','posts'));
    }

    public function store(Request $request)
    {

        $slug = Str::slug($request->input('title'), '-');
        $fields = [
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'slug' => $slug,
            'content' => $request->input('content')
        ];

        $store = Post::create($fields);

        return redirect()->route('get-post',['user' => $store->user->username,'slug' => $store->slug]);
    }

    public function editPost(Request $request)
    {
        return view('post.post-edit');
    }

    public function storeEditPost(Request $request, User $user, string $slug)
    {

    }

    public function react(Request $request, User $user, Post $post)
    {

    }

}
