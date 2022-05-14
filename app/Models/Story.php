<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    public static function getStories(){
        return Story::all();
    }

    function getChapters(){
        return $this->hasMany('App\Models\Chapter');
    }
}
