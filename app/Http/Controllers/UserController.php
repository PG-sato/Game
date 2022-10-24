<?php

namespace App\Http\Controllers;

use Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function prof()
    {
        print(Auth::user());
        print(22);
        $user = Auth::user();
        return view('posts/prof')->with(['user'=>$user]);
    }
}
