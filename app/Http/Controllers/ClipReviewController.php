<?php

namespace App\Http\Controllers;
use App\Post;
use App\Clip_review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClipreviewController extends Controller
{
    public function review(Clip_review $Clip_review, Post $post)
    { 
        return view('posts/comment')->with(['post' => $post]);
        // print($Clip_review);
        // print($post);
        // print(Auth::user());
    }
    
    public function comment(Clip_review $clip, Request  $request)
    {
        $clip->clip_reviewer_id = Auth::user()->id;
        $input = $request['user_review'];
        $post = Post::find($input['clip_id']);
        $clip->fill($input);
        $clip->save();
        return redirect('posts/'. $post->id)->with(['post' => $post]);
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
}
