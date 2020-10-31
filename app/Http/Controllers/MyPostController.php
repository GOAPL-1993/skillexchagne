<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyPostController extends Controller
{
    public function post()
    {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
            return view('pages.post', compact('username'));
        } else {
            return view('auth.login');
        }
    }

    public function mypost()
    {
        $myposts = DB::table("posts")->get();
        return view("pages.mypost", compact('myposts'));
    }
}
