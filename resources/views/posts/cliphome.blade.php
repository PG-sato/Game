<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/cliphome.css">
    </head>
    <body>
        @extends('layouts.app')

        @section('content')
        <div class="home_body">
            <div class="home">
                <h1>ゲームマッチングサービスへようこそ</h1>
                <a href="/posts/clip">《クリップの投げ合いページ》</a>
            </div>
            
            <div class="footer">
                <footer>
                    <a href="/posts/clip">《クリップの投げ合いページ》</a>
                </footer>
            </div>
            
        </div>
        
        @endsection
    </body>
</html>
