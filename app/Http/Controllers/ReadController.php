<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;
use App\Models\User;

class ReadController extends Controller
{
    function getView($storyId, $chapterNum){
        $story = Story::find($storyId);
        return view('read', ['story' => $story, 'authorName' => User::find($story['author_id'])->name, 'chapterNum' => $chapterNum, 'chapter' => $story->getChapters[$chapterNum-1]]);
    }
}
