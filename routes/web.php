<?php

use App\Http\Controllers\VideoPlayController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\SearchController;
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

Route::get('/index', [PostController::class, 'showPost'])->name('showPost');

Route::get('/', [AboutUsController::class, 'aboutUs']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
