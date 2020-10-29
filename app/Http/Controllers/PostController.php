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
        $ids = DB::table('posts')->get('id');
        // return $ids;
        $user_ids = DB::table("posts")->get('user_id');
        $usernames = DB::table("posts")->get('username');
        $sorts = DB::table("posts")->get('sort');
        $areas = DB::table("posts")->get('area');
        $wanna_teachs = DB::table("posts")->get('wanna_teach');
        $wanna_learns = DB::table("posts")->get('wanna_learn');
        $bodies = DB::table("posts")->get('body');
        $catalogs = DB::table("posts")->get('catalog');
        // DB::table("posts")->get();
        return view("pages.index", compact('ids', 'user_ids', 'usernames', 'sorts', 'areas', 'wanna_teachs', 'wanna_learns', 'bodies', 'catalogs'));
    }
}
