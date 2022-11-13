<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Chat;

class ChatController extends Controller
{
    public function chathome()
    {
        $user = Auth::user();
        $users = User::where('id', '<>', $user->id)->get();
        return view('posts/chathome')->with(['users' => $users]);
    }
    
    public function chat($recipient)
    {
        $sender = (string) Auth::id();
        $params = [
            'sender_user_id' => $sender,
            'recipient_user_id' => $recipient, 
        ];
        $query = Chat::where('sender_user_id', $sender)->where('recipient_user_id', $recipient);
        $query->orWhere(function($query) use($sender, $recipient){
            $query->where('sender_user_id', $recipient);
            $query->where('recipient_user_id', $sender);
        });
        $messages = $query->get();
        return view('posts/chat')->with(['messages' => $messages, 'params' => $params]);
    }
    
    public function store(Chat $chat, Request $request)
    {
        $input = $request['chat'];
        $chat->fill($input);
        $chat->save();
        return redirect('chathome/chat/'.$input['recipient_user_id']);
        
    }
    
    
}
