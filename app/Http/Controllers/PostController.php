<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index() {
        $posts = Post::paginate(6);

        return view('homepage', [
            'posts' => $posts
        ]);

    }

    public function store(Request $request) {
        $this->validate($request , [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
