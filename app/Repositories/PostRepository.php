<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Pagination\Paginator;

class PostRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Post;
    }

    public function store()
    {

    }

    public function getPosts(int $numPages)
    {
//        $posts = Post::with('user', 'comments')->paginate($numPages);
        return $this->model::with('user', 'comments')->paginate($numPages);

    }

}
