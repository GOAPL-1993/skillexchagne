<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        if ($username != "Guest") {
            return view('pages.post');
            $sorts = DB::table('posts')->get();
            $areas = DB::table('posts')->get();
            $wanna_teachs = DB::table('posts')->get();
            $wanna_learns = DB::table('posts')->get();
            $bodies = DB::table('posts')->get();
            $catalogs = DB::table('posts')->get();
            return view('pages.index', compact('username', 'sorts', 'areas', 'wanna_teachs', 'wanna_learns', 'bodies', 'catalogs'));
        } else {
            return view('auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function addPost(Request $req)
    { //Request是一個模組，把資料拿過來用

        DB::table("posts")->insert([
            'sort' => $req->postSort,
            'area' => $req->postArea,
            'wanna_teach' => $req->postWannaTeach,
            'wanna_learn' => $req->postWannaLearn,
            'body' => $req->postBody,
            'catalog' => $req->postCatalog
        ]);

        return redirect('/'); //重新導向
    }
}
