<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Story;

class MyStoriesController extends Controller
{
    function getStories(){
        $stories = Story::all()->where('author_id', '=', auth()->user()->id);
        return view('myStories', ['stories' => $stories]);
    }

    function newStory(Request $req){
        return redirect('edit_story');
    }
}
