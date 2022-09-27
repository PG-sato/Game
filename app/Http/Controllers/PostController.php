<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(Post $post){
        //print("ssss");
        return view('posts/home')->with(['posts' => $post->get()]);
    }
}
