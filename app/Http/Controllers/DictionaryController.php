<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class DictionaryController extends Controller
{
    function getView(Request $req){
        if($req->input('word')){
            $word = Http::get('https://api.dictionaryapi.dev/api/v2/entries/en/'.$req->input('word'));
            if(isset($word['title'])){
                $word = 'Word not found';
            }
            else{
                $word = $word[0]; // just the first element
            }
        }
        else{
            $word = '';
        }
        return view('dictionary', ['word' => $word]);
    }
}
