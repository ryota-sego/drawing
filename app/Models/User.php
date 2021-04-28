<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'icon',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //コメント関連
    
    public function comments()
    {
        return $this->hasMany('Comment');
    }
    
    //イラスト関連
    
    public function illusts()
    {
        return $this->hasMany('Illust');
    }
    
    //お気に入り関連
    
    public function favorited_illusts(){
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'illust_id')->withTimestamps();
    }
}
