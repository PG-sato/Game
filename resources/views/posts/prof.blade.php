<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/prof_show.css">
    </head>
    <body>
        @extends('layouts.app')

        @section('content')
        
        <form action="/posts/prof/store" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="profile">
                
                <div class="user_name">
                    <p>{{ $user->name }}　さん</p>
                </div>
                
                <div class="prof_icon">
                    @if($user->Profimg_path == null)
                      <figure class="circle_icon"><img src="/storage/first.png"></figure>
                    @else
                      <figure class="circle_icon"><img src="{{$user->Profimg_path}}"></figure>
                    @endif
                    <input type="file" name="user[Profimg_path]">
                </div>
                
                <br>
                
                <div class="Pr">
                    <h2>自己紹介</h2>
                    <textarea name="user[Pr]" placeholder="自己紹介文">{{ $user->Pr }}</textarea>
                    <p class='Pr_error' style="color:red">{{ $errors->first('user.Pr') }}</p>
                </div>
                
                <div class="button">
                    <input type="submit" value="プロフィールを更新">
                    <a href='/'>ホームへ</a>
                </div>
                
            </div>
        </form>
        
        @endsection
    </body>
</html>
