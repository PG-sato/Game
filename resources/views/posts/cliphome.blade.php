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
                <h1>ホーム</h1>
                <a href="/posts/clip">《クリップの投げ合いページ》</a>
                <a href="/chathome">《個人チャット》</a>
            </div>
            
            <div class="users">
                @foreach($users as $user)
                <div class="user">
                    @if($user->Profimg_path == null)
                        <figure class="circle_icon"><img src="/storage/first.png"></figure>
                    @else
                        <figure class="circle_icon"><img src="{{$user->Profimg_path}}"></figure>
                    @endif
                    
                    <h2>{{$user->name}}</h2>
                    
                    <form action="/users/follow/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        @if(true)
                            <input type="submit" value="フォロー">
                        @else
                            <p>フォロー済み</p>
                        @endif
                    </form>
                   
                </div>
                @endforeach
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
