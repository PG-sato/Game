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
}
