<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use App\Models\Chapter;

class Story extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * Returns all stories that have at least one chapter.
     */
    public static function getMainStories($title = ''){
        // return Chapter::all('story_id')->keyBy('story_id');
        return Story::all()
        ->whereIn('id', [1, 2, 3]);
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
