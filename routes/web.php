<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\MyStoriesController;
use App\Http\Controllers\EditStoryController;

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

Route::get('/read/{storyId}/{chapterNum}', [ReadController::class, 'getView']);

Route::get('/prueba', [ReadController::class, 'getChapters']);


// Route::post('/read', [ReadController::class, 'changeChapter']);

// Route::get('/my_stories', [MyStoriesController::class, 'getStories'])->middleware(['auth'])->name('my_stories');
// Route::post('/my_stories', [MyStoriesController::class, 'newStory'])->middleware(['auth'])->name('my_stories');

// Route::post('/my_stories/{id}', [EditStoryController::class, 'editStory'])->middleware(['auth'])->name('my_stories');

// Route::get('/edit_story', function () {
//     return view('editStory');
// })->middleware(['auth'])->name('edit_story');
// Route::post('/edit_story', [EditStoryController::class, 'postEdit'])->middleware(['auth'])->name('my_stories');

require __DIR__.'/auth.php';



