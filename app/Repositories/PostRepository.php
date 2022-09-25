<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Post;
    }

    public function store($request)
    {

        $slug = Str::slug($request->title, '-');
        $fields = [
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content
        ];

        return Post::create($fields);
    }

    public function getPosts(int $numPages)
    {
//        $posts = Post::with('user', 'comments')->paginate($numPages);
        return $this->model::with('user', 'comments')->orderByDesc('id')->paginate($numPages);

    }

}
