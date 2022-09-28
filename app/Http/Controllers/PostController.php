<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Storage;

class PostController extends Controller
{
    
    public function home(){
        return view('posts/home');
    }
    
    public function clip(Post $post){
        //print("ssss");
        return view('posts/clip')->with(['posts' => $post->get()]);
    }
    
    public function create(){
        return view('posts/create');
    }
    
    public function store(Post $post, PostRequest $request){
        //リクエスト取得 post[<name>[中身],．．．]を取得
        $form = $request->all();
        
        //fileパスを配列に格納
        $img = $request->file('post.img_path');
        
        $input = $request['post'];

        $path = Storage::disk('s3')->putFile('vobacket', $img, 'public');
        
        $post->img_path = Storage::disk('s3')->url($path);
        
        $post->fill($input);
        
        $post->save();
        
        // dd($post);
        
        // dd($post);
        
        //dd($post);
        
        return redirect('posts/clip');

        
    }
}
