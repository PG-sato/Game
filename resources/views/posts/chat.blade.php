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
        
        <div class="chatroom">
            <div class="room">
                @foreach($messages as $message)
                    @if($message->sender_user_id == \Illuminate\Support\Facades\Auth::id())
                        <div class="send" style="text-align: right">
                            <p>{{$message->message}}</p>
                        </div>
                    @endif
                    
                    @if($message->recipient_user_id == \Illuminate\Support\Facades\Auth::id())
                        <div class="recipient" style="text-align: left">
                            <p>{{$message->message}}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            
            <form action="/chathome/chat/send" method="POST" enctype="multipart/form-data">
                @csrf
                <textarea name="chat[message]" style="width:100%"></textarea>
                <input type="submit">
            
                <input name="chat[sender_user_id]" value="{{$params['sender_user_id']}}" hidden>
                <input name="chat[recipient_user_id]" value="{{$params['recipient_user_id']}}" hidden>
            </form>
        </div>
        
        @endsection
    </body>
</html>