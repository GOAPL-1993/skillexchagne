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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    global $username;//加這一段是因為function裡的變數在外面不能通用，所以要加function裡把該變數變成global讓外面也可以用

    return view('dashboard');
})->name('dashboard');
