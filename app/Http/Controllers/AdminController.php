<?php

namespace App\Http\Controllers;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use App\Services\Post\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('layouts.admin');
    }

    public function post(FilterRequest $filterRequest)
    {
        $data = $filterRequest->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(5);


        return view('admin.post.index', compact('posts'));
    }
}