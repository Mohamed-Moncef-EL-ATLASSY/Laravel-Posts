<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {

        // To test user if signed in
        // dd($request->only('email', 'password'));

        //Forward data from inputs to the database
        $this->validate($request, [
            'name'     => 'required|max:255|min:3',
            'username' => 'required|max:255|min:3',
            'email'    => 'required|max:255|min:3|email',
            'password' => 'required|max:255|min:3|confirmed',
        ]);

        //Store user
        User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Log the user in
        auth()->attempt($request->only('email', 'password'));


        //Redirect
        return redirect()->route('dashboard');
    }
}
