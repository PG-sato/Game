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
        
        <div class="content">
            <div class="content_post">
                <p class="creator_id">{{ $post->creator_id }}さん</p>
                <h1 class="img_title">{{ $post->img_title }}</h1>
                <p class="img_comment>">{{ $post->img_comment }}</p>
                <video width="800" src="{{ $post->img_path }}" controls loop autoplay=0 muted></video>
            </div>
            
            <div class="add_comment_div">
                <a class="clip_review" href="/posts/review/{{ $post->id }}">コメントを追加する</a>
            </div>
            
            @foreach($clips as $clip)
            <div class="clips">
                <div class="clip">
                    <img width="100" src="{{ $clip->Profimg_path }}">
                    <p class="comment_user">{{ $clip->clip_reviewer_id }}　さん</p>
                    <p class="comment_title">{{ $clip->title }}</p>
                    <p class="comment_body">{{ $clip->comment }}</p>
                </div>
            </div>
            <br>
            @endforeach
            
        </div>
        <div class='back'>
            <a href='/posts/clip'>戻る</a>
        </div>
        
        @endsection
    </body>
</html>
