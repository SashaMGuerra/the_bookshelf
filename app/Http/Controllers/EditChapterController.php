<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditChapterController extends Controller
{
    function getView(){
        return session('editChapter');
    }
}
