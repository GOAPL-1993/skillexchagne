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
            $post_username = $user->name;
            $post_user_id = $user->id;
            return view('pages.post', compact('post_username', 'post_user_id'));
        } else {
            return view('auth.login');
        }
    }

    public function addPost(Request $req)
    { //Request是一個模組，把資料拿過來用

        DB::table("posts")->insert([
            'post_user_id' => $req->postUserid,
            'post_username' => $req->postUsername,
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
        // $user_id = DB::table("posts")->get('user_id');
        $post_user_ids = DB::table("posts")->get('post_user_id');
        $post_usernames = DB::table("posts")->get('post_username');
        $sorts = DB::table("posts")->get('sort');
        $areas = DB::table("posts")->get('area');
        $wanna_teachs = DB::table("posts")->get('wanna_teach');
        $wanna_learns = DB::table("posts")->get('wanna_learn');
        $bodies = DB::table("posts")->get('body');
        $catalogs = DB::table("posts")->get('catalog');
        return view("pages.index", compact('ids', 'post_user_ids',  'post_usernames', 'sorts', 'areas', 'wanna_teachs', 'wanna_learns', 'bodies', 'catalogs'));
    }
}
