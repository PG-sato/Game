<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>動画投稿ページ</h1>
        @foreach($posts as $post)
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>{{$post->img_title}}</h2>
                <p class='body'>{{$post->img_comment}}</p>
            </div>
        </div>
        @endforeach
    </body>
</html>