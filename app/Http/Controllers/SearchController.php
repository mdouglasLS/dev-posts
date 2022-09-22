<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\SearchRepository;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    private $repository;

    public function __construct(SearchRepository $repository)
    {
        $this->repository = $repository;
    }

    public function search(Request $request)
    {
        $fieldSearch = $request->input('search');

        $results = $this->repository->search($fieldSearch);

        $title = 'Resultados para '.$fieldSearch;
        return view('search', compact('title', 'results'));
    }
}
