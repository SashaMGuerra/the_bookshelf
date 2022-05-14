<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;

class MainController extends Controller
{
    function getMain(){
        $stories = Story::getStories();
        return view('main', ["stories" => $stories]);
    }

    function readStory($id){
        session()->put('story', Story::find($id));
        return redirect('/read');
    }
}
