<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;
use App\Models\Chapter;

class ReadController extends Controller
{
    function getStory(){
        session()->put('storyChapter', 1);
        $chapter = session('story')->getChapters[session('storyChapter')-1];
        return view('read', ['story' => session('story'), 'chapter' => $chapter]);
    }

    function changeChapter(Request $req){
        switch($req->input('changeChapter')){
            case 'previous':
                if(session()->get('storyChapter') > 1){
                    session()->put('storyChapter', session()->get('storyChapter')-1);
                }
                return view('read', ['story' => session('story'), 'chapter' => session('story')->getChapters[session('storyChapter')-1]]);
                break;
            case 'next':
                if(session()->get('storyChapter') < session('story')->getChapters->count()){
                    session()->put('storyChapter', session()->get('storyChapter')+1);
                }
                return view('read', ['story' => session('story'), 'chapter' => session('story')->getChapters[session('storyChapter')-1]]);
                break;
        }
    }
}
