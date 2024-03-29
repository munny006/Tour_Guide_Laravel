<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     use HasFactory;

  public function user()
  {
    return $this->belongsTo('App\Models\User');
   }

   public function category()
  {
    return $this->belongsTo('App\Models\Category');
   }
   public function tags(){
    return $this->hasMany('App\Models\Tag','postID','id');
   }

   public function comments(){
    return $this->hasMany('App\Models\Comment');
   }
   public function scopePublished($query){
    return $query->where('status',1);

   }

   //many to many
    public function likedUsers(){
      return $this->belongsToMany('App\Models\User')->withTimestamps();
    }


}
