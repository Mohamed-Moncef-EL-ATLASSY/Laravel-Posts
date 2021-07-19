<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index() {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(5);

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

    public function destroy(Post $post){

        $this->authorize('delete', $post); //Throws an exception

        $post->delete();

        return back();
    }
}
