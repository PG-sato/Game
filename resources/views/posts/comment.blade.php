<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/styleclip.css">
    </head>
    <body>
        @extends('layouts.app')
        
        @section('content')
        
        <center><h1>コメント投稿ページ</h1></center>
        
        <form action="/posts/comment" method="POST" enctype="multipart/form-data">
            @csrf
            
            <input name="user_review[clip_id]" value={{ $post->id }} hidden>
            
            <div class="comment_title">
                <h2>タイトル</h2>
                <input type="text" name="user_review[title]" placeholder="タイトル" value={{ old('user_review.title') }}>
                <p class='comment_title_error' style="color:red">{{ $errors->first('user_review.title') }}</p>
            </div>
            
            <div class="comment">
                <h2>コメント</h2>
                <input type="text" name="user_review[comment]" placeholder="コメント" value={{ old('user_review.comment') }}>
                <p class='comment_error' style="color:red">{{ $errors->first('user_review.comment') }}</p>
            </div>
            
            <div class="button">
                <input type="submit" value="store"/>
            </div>
            
        </form>
        
        <div class='back'>
            <a href='/posts/{{ $post->id }}'>戻る</a>
        </div>
        
        @endsection
    </body>
</html>