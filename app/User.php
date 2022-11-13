<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    public function updateUserProf($user_id, $Pr, $Profimg_path)
    {
        return $this->where([
                'id'=>(string)$user_id
            ])->update([
                'Profimg_path'=>$Profimg_path,
                'Pr'=>$Pr
            ]);
    }
    
    public function follows()
    {
        return $this->belongsToMany('App\User', 'follow_users', 'follower_id', 'user_id');
    }
    
    public function followers()
    {
        return $this->belongsToMany('App\User', 'follow_users', 'user_id', 'follower_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'Age',
        'Sex', 
        'profimg_path',
        'Pr',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    
}
