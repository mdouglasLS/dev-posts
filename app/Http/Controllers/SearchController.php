<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $fieldSearch = $request->input('search');

        $results = Post::where('title', "like", "%{$fieldSearch}%")
            ->orWhere('content', "like", "%{$fieldSearch}%")
            ->with('user','comments')->paginate(5);

        $title = 'Resultados para '.$fieldSearch;
        return view('search', compact('title', 'results'));
    }
}
