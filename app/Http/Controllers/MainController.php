<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;

class MainController extends Controller
{
    function getView(){
        $stories = Story::getMainStories();
        return view('main', ["stories" => $stories]);
    }

    function readStory($id){
        session()->put('story', Story::find($id));
        return redirect('/read');
    }
}
