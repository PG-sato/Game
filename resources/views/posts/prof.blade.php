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
        
        <form action="/posts/prof/store" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="profile">
                
                <div class="user_name">
                    <p>{{ $user->name }}</p>
                </div>
                
                <div class="prof_icon">
                    @if($user->Profimg_path == null)
                      <img src="/storage/first.png">
                    @else
                      <img src="{{$user->Profimg_path}}">
                    @endif
                    <input type="file" name="user[Profimg_path]">
                    <p>{{ $user->Profimg_path }}</p>
                </div>
                
                <div class="Pr">
                    <h2>コメント</h2>
                    <textarea name="user[Pr]" placeholder="コメント">{{ $user->Pr }}</textarea>
                    <p class='Pr_error' style="color:red">{{ $errors->first('user.Pr') }}</p>
                </div>
                
            </div>
            
            
            
            <div class="button">
                <input type="submit"/>
            </div>
            
        </form>
        
        @endsection
    </body>
</html>
