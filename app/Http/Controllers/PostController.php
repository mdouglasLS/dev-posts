<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{

    private $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function newPost(Post $post)
    {
        $title = 'Publicar Post';
        return view('post.post-new', compact( 'title','post'));
    }

    public function getPostBySlug(Post $post)
    {
        $title = 'asd';
        return view('post.posts', compact('title','post'));
    }

    public function getAllPosts(Request $request)
    {
        $posts = Post::with('user', 'comments')->paginate(15);
        $title = 'Posts';
        return view('site.posts', compact('title','posts'));
    }

    public function store(Request $request)
    {
        $store = $this->repository->store($request);
        dd($store);
    }

}
