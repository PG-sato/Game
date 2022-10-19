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
        
        <div class="profile">
            <div class="prof_icon">
                <img src="/storage/profile_icon.png">
            </div>
        </div>
        
        @endsection
    </body>
</html>
