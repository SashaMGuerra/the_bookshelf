<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReadController;

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

Route::get('/', [MainController::class, 'getMain']);
Route::get('/main', [MainController::class, 'getMain']);
Route::post('/main/{id}', [MainController::class, 'readStory']);

Route::get('/read', [ReadController::class, 'getStory']);
Route::post('/read', [ReadController::class, 'changeChapter']);

Route::get('/my_stories', function () {
    return view('myStories');
})->middleware(['auth'])->name('my_stories');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



