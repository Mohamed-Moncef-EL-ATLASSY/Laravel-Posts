<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index() {

        return view('auth.login');

    }

    public function store(Request $request) {

        //Forward data from inputs to the database
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        //Log the user in
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid Log In details');
        }

        //Redirect
        return redirect()->route('posts');
    }
}
