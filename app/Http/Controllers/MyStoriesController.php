<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\EditStoryController;

use App\Models\Story;

class MyStoriesController extends Controller
{
    function getView(){
        $stories = Story::all()->where('author_id', '=', auth()->user()->id);
        return view('myStories', ['stories' => $stories]);
    }

    function post(Request $req){
        switch($req->input('submit')){
            case 'addStory':
                session()->put('editStory', new Story);
                break;
            default:
                session()->put('editStory', Story::find($req->input('submit')));
                break;
        }
        return redirect('/edit_story');
    }
}
