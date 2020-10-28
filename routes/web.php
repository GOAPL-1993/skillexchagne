<?php

use App\Http\Controllers\VideoPlayController;
use App\Http\Controllers\PostController;
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

Route::get('/',[VideoPlayController::class,'index']);
Route::get('/logout', [VideoPlayController::class, 'logout']);
Route::get('post',[PostController::class,'post']);
Route::get('/addPost/',[PostController::class,'addPost'])->name('addPost');
Route::middleware('/showPost/',[PostController::class,'showPost'])->name('showPost');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
