<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'img_title',
        'img_comment',
        // 'img_path'
    ];
}
