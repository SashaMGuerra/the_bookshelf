<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;
use App\Models\Chapter;

class ReadController extends Controller
{
    function getView($storyId, $chapterNum){
        $story = Story::getStory($storyId);
        return view('read', ['story' => $story, 'chapterNum' => $chapterNum, 'chapter' => $story->getChapters[$chapterNum-1]]);
    }
}
