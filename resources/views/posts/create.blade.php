<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')
        
        @section('content')
        
        <h1>動画を投稿</h1>
        <form action="/posts/store" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="img_title">
            <h2>タイトル</h2>
            <input type="text" name="post[img_title]" placeholder="タイトル" value={{ old('post.img_title') }}>
            <p class='img_title_error' style="color:red">{{ $errors->first('post.img_title') }}</p>
        </div>
        
        <div class="img_comment">
            <h2>コメント</h2>
            <textarea name="post[img_comment]" placeholder="コメント">{{ old('post.img_comment') }}</textarea>
            <p class='img_comment_error' style="color:red">{{ $errors->first('post.img_comment') }}</p>
        </div>
        
        <div class="img_path">
            <input type="file" name="post[img_path]">
            <p class='img_path_error' style="color:red">{{ $errors->first('post.img_path') }}</p>
        </div>
        <div class="buto">
            <input type="submit" value="store"/>
            <a href='/posts/clip'>戻る</a>
        </div>
        </form>
        
        @endsection
    </body>
</html>