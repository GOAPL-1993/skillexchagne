<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $id = Auth::id();
            $post_username = $user->name;
            $post_user_id = $user->id;
            return view('pages.post', compact('post_username', 'post_user_id'));
        } else {
            return view('auth.login');
        }
    }


    public function showPost()
    {
        $posts = DB::table("posts")->get();
        return view('pages.index', compact('posts'));
    }
}
