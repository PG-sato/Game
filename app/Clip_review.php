<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clip_review extends Model
{
    protected $fillable = [
        'clip_id',
        'clip_reviewer_id',
        'title',
        'comment',
    ];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
