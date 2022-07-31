<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PostsController extends Controller
{   
    //this construct means that all routes in this controller will require authorisation
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $imagePath =request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        // \App\Models\Post::create($data);

        // dd(request()->all());
        return redirect('profile/'. auth()->user()->id);

    }
}
