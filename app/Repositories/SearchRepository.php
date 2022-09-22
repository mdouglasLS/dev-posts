<?php

namespace App\Repositories;

use App\Models\Post;

class SearchRepository
{


    public function search($fieldSearch)
    {
        return Post::where('title', "like", "%{$fieldSearch}%")
            ->orWhere('content', "like", "%{$fieldSearch}%")
            ->with('user','comments')->paginate(5);
    }

}
