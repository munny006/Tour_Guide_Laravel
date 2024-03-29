<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'userid',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function role(){
       return $this->belongsTo(Role::class);
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

     public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

     public function replies(){
        return $this->hasMany('App\Models\CommentReply');
    }

     public function likedPost(){
        return $this->belongsToMany('App\Models\Post');
    }

    public function likedPosts()
    {
        return $this->belongsToMany('App\Models\Post')->withTimestamps();
    }
}
