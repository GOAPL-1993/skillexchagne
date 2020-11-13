<?php

use App\Http\Controllers\VideoPlayController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CollectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

$username = "Guest";
if (Auth::check()) {
    $user = Auth::user();
    $username = $user->name;
}

Route::get('/logout', [VideoPlayController::class, 'logout']);

Route::get('/post', [PostController::class, 'post']);
Route::get('/addPost', [PostController::class, 'addPost'])->name('addPost');
Route::get('/index', [PostController::class, 'showPost'])->name('showPost');
Route::get('/postdetail/{id}/', [PostController::class, 'showPostDetail'])->name('showPostDetail');

Route::get('/mypost', [MyPostController::class, 'myPost'])->name('myPost');
Route::get('/delete/{id}/', [MyPostController::class, 'delete']);
Route::get('/updatepost/{id}/', [MyPostController::class, 'wannaUpdate']);

Route::get('/updatedPost', [MyPostController::class, 'updatePost'])->name('updatePost');

Route::get('/', [AboutUsController::class, 'aboutUs']);

Route::get('/search/{catalog}', [SearchController::class, 'search'])->name('search');
Route::get('/search', [SearchController::class, 'searchArea'])->name('searchArea');

Route::get('/message', [MessageController::class, 'getTalk'])->name('getTalk');
Route::get('/addMessage', [MessageController::class, 'addMessage'])->name('addMessage');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
