<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;
use App\Models\Chapter;

class EditStoryController extends Controller
{
    function getView(){
        if(session('editStory')){
            $story = session('editStory');
            return view('editStory', ['story' => $story]);
        }
        else{
            return redirect('my_stories');
        }
    }

    function post(Request $req){
        switch($req->input('submit')){
            case 'cancel':
                session()->forget('editStory');
                return redirect('my_stories');
                break;
            case 'saveStory':
                $input = $req->input();
                if($input['id']){
                    $story = Story::find($input['id']);
                }
                else{
                    $story = new Story;
                    $story->author_id = auth()->user()->id;
                }
        
                $story->title = $input['title'];
                $story->synopsis = $input['synopsis'];
                $story->save();
                
                session()->forget('editStory');
                return redirect('my_stories');
                break;
            case 'addChapter':
                $chapter = new Chapter;
                $chapter->story_id = session('editStory')->id;
                session()->put('editChapter', $chapter);
                return redirect('edit_chapter');
                break;
            default:
                $chapter = Chapter::find($req->input('submit'));
                session()->put('editChapter', $chapter);
                return redirect('edit_chapter');
                break;
        }
    }
}
