<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\Clip_review;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Storage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    
    public function cliphome()
    {
        return view('posts/cliphome');
    }
    
    public function clip(Post $post)
    {
        return view('posts/clip')->with(['posts' => $post->all()]);
    }
    
    public function create()
    {
        return view('posts/create');
    }

    public function show(Post $post)
    {
        //dd(Clip_review::where('clip_reviewer_id', '1')->get());
        return view('posts/show')->with(['post' => $post, 'clips' => Clip_review::where('clip_id', $post->id)->get()]);
    }
    
    public function prof(User $user)
    {
        print(Auth::user());
        dd($user);
        //return view('posts/prof');
    }
    
    public function store(Post $post, PostRequest $request)
    {
        //リクエスト取得 post[<name>[中身],．．．]を取得
        $form = $request->all();
        //print($request)
        //dd($post);
        //dd($form);
        
        //fileパスを配列に格納
        $img = $request->file('post.img_path');
        
        $input = $request['post'];

        $path = Storage::disk('s3')->putFile('vobacket', $img, 'public');
        
        $post->img_path = Storage::disk('s3')->url($path);
        
        $post->fill($input);
        
        $post->save();
        
        return redirect('posts/clip');
    }
}
