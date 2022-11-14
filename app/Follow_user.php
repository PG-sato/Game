<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow_user extends Model
{
    protected $fillable = [
        'follow_id',
        'follower_id',
    ];
    
    public function a()
    {
        return true;
    }
}
