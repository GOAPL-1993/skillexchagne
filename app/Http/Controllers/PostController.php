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
            $id = Auth::id();
            $username = $user->name;
            $user_id = $user->id;
            return view('pages.post', compact('username', 'user_id'));
        }
        else {
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

        global $username;
        DB::table("posts")->insert([
            'user_id' => $req->postUserid,
            'username' => $req->postUsername,
            'sort' => $req->postSort,
            'area' => $req->postArea,
            'wanna_teach' => $req->postWannaTeach,
            'wanna_learn' => $req->postWannaLearn,
            'body' => $req->postBody,
            'catalog' => $req->postCatalog
        ]);

        return redirect('/'); //重新導向
    }
    public function showPost()
    {
        // Auth::id();
        // $ids = DB::table("posts")->lists('id')->first();
        // $user_ids = DB::table("posts")->where('user_id')->get();
        // $usernames = DB::table("posts")->where('username')->get();
        // $sorts = DB::table("posts")->where('sort')->get();
        // $areas = DB::table("posts")->where('area')->get();
        // $wanna_teachs = DB::table("posts")->where('wanna_teach')->get();
        // $wanna_learns = DB::table("posts")->where('wanna_learn')->get();
        // $bodies = DB::table("posts")->where('body')->get();
        // $catalogs = DB::table("posts")->where('catalog')->get();
        DB::table("posts")->get();
        return view("pages.index", compact('id', 'user_ids', 'usernames', 'sorts', 'areas', 'wanna_teachs', 'wanna_learns', 'bodies', 'catalogs'));
    }
}
