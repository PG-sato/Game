<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'img_title',
        'img_comment',
        'creator_id',
    ];
    
    public function clip_review()
    {
        return $this->belongsTo('App\Clip_review');
    }
}
