<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;

class EditStoryController extends Controller
{
    function postEdit(Request $req){
        if($req->input('saveStory') !== 'cancel'){
            $newStory = new Story;
            $newStory->author_id = auth()->user()->id;
            $newStory->title = $req->input()['title'];
            $newStory->synopsis = $req->input()['synopsis'];

            $newStory->save();
        }
        return redirect("my_stories");
    }

    function editStory($id){
        return view('editStory', ['story' => Story::find($id)]);
    }
}
