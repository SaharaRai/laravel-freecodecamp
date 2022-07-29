<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PostsController extends Controller
{
    public function create()
    {
        return view('layouts.posts.create');
        // return view('posts/create'); // can be . or /
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        auth()->user()->posts()->create($data);

        // \App\Models\Post::create($data);
        
        dd(request()->all());

    }
}
