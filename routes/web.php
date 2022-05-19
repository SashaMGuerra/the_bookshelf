<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\MyStoriesController;
use App\Http\Controllers\EditStoryController;
use App\Http\Controllers\EditChapterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'getView']);
Route::get('/main', [MainController::class, 'getView']);

Route::get('/dictionary', [DictionaryController::class, 'getView']);

Route::get('/read/{storyId}/{chapterNum}', [ReadController::class, 'getView']);

Route::get('/my_stories', [MyStoriesController::class, 'getView'])
->middleware(['auth'])->name('my_stories');
Route::post('/my_stories', [MyStoriesController::class, 'post'])
->middleware(['auth'])->name('my_stories');

Route::get('/edit_story', [EditStoryController::class, 'getView'])->middleware(['auth'])->name('edit_story');
Route::post('/edit_story', [EditStoryController::class, 'post'])->middleware(['auth'])->name('edit_story');

Route::get('/edit_chapter', [EditChapterController::class, 'getView'])->middleware(['auth'])->name('edit_chapter');
Route::post('/edit_chapter', [EditChapterController::class, 'post'])->middleware(['auth'])->name('edit_chapter');

require __DIR__.'/auth.php';



