<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Chapter;

class Story extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * Returns all stories that have at least one chapter
     * and that matches the searched description (if given one)
     */
    public static function getMainStories($description = ''){
        return Story::whereIn('id', Chapter::all('story_id')->groupBy('story_id')->keys())
        ->where(function($query) use ($description){
            $query->where('title', 'LIKE', "%$description%")
            ->orWhere('synopsis', 'LIKE', "%$description%");
        })
        ->get();
    }

    /**
     * Returns all story chapters.
     */
    function getChapters(){
        return $this->hasMany('App\Models\Chapter');
    }

    /**
     * Deletes all chapters, then the story.
     */
    public static function fullDelete($id){
        $story = Story::find($id);
        Chapter::destroy($story->getChapters);
        $story->delete();
    }
    
}
