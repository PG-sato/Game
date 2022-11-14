<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follow_user;

class FollowUserController extends Controller
{
    public function follow(User $user)
    {
        $follow = Follow_user::create([
            'follow_id' => Auth::user()->id,
            'follower_id' => $user->id,
        ]);
    }
    
    public function unfollow(User $user)
    {
        $follow = Follow_user::where('follow_id', Auth::user()->id)->where('follower_id', $user->id)->first();
        $follow->delete();
    }
    
}
