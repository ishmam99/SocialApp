<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];
    public function profileImage()
    {
       $imagePath=($this->image)? $this->image:'default.png';
       return '/uploads/'.$imagePath;
    }
    public function cover()
    {
       $imagePath=($this->cover)? $this->cover:'../images/covers/default.jpg';
       return '/uploads/'.$imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
