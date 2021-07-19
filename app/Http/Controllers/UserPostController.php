<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserPostController extends Controller
{
    public function index(User $user) {
        dd($user);
    }
}
