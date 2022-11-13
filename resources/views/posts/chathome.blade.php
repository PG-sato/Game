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
        
        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name.</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td><a href="/chathome/chat/{{ $user->id }}"><button type="button" class="btn-go-chat">チャットする</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
        @endsection
    </body>
</html>