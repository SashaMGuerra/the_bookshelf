<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chapter;

class EditChapterController extends Controller
{
    function getView(){
        if(session('editChapter')){
            $chapter = session('editChapter');
            return view('editChapter', ['chapter' => $chapter]);
        }
        else{
            return redirect('edit_story');
        }
    }

    function post(Request $req){
        switch($req->input('submit')){
            case 'cancel':
                session()->forget('editChapter');
                return redirect('edit_story');
                break;
            case 'saveChapter':
                return EditChapterController::saveChapter($req);
                      
                break;
        }
    }

    function saveChapter(Request $req){
        $req->validate([
            'title' => 'required | min:3',
            'text' => 'required | min:10'
        ]);

        $input = $req->input();
        if($input['id']){
            $chapter = Chapter::find($input['id']);
        }
        else{
            $chapter = new Chapter;
            $chapter->story_id = session('editStory')->id;
        }

        $chapter->title = $input['title'];
        $chapter->summary = $input['summary']??'';
        $chapter->text = $input['text'];
        $chapter->save();

        session()->forget('editChapter');
        return redirect('edit_story');
    }
}
