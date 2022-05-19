<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\EditStoryController;

use App\Models\Story;

class MyStoriesController extends Controller
{
    function getView(){
        $stories = Story::where('author_id', '=', auth()->user()->id)
        ->paginate(5);

        return view('myStories', ['stories' => $stories]);
    }

    function post(Request $req){
        switch(explode('/', $req->input('submit'))[0]){
            case 'addStory':
                session()->put('editStory', new Story);
                return redirect('/edit_story');
                break;
            case 'edit':
                session()->put('editStory', Story::find(explode('/', $req->input('submit'))[1]));
                return redirect('/edit_story');
                break;
            case 'delete':
                Story::fullDelete(explode('/', $req->input('submit'))[1]);
                return redirect('/my_stories');
                break;
        }
    }
}
