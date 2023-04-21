<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $postsArr = [
            'title' => 'some title',
            'text' => 'some text',
            'image' => 'image.png',
            'likes' => '111',
            'is_published' => '1',
        ];

        Post::create([
            'title' => 'some title',
            'text' => 'some text',
            'image' => 'image.png',
            'likes' => '111',
            'is_published' => '1',
        ]);

        dd('created');
    }
}
