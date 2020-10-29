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
            $id = Auth::user();
            $username = $user->name;
            $user_id = $user->id;
            DB::table('posts')->get();
            return view('pages.post', compact('username', 'user_id'));

        }
        if ($username != "Guest") {
            DB::table('posts')->get();
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

        global $username;
        DB::table("posts")->insert([
            'user_id'=> $req->postUserid,
            'username'=> $req->postUsername,
            'sort' => $req->postSort,
            'area' => $req->postArea,
            'wanna_teach' => $req->postWannaTeach,
            'wanna_learn' => $req->postWannaLearn,
            'body' => $req->postBody,
            'catalog' => $req->postCatalog
        ]);

        return redirect('/'); //重新導向
    }
    public function showPost($id)
    {
        DB::table("posts")->where('listid', '=', $id)->get();
        return view("pages.index", compact('ids', 'username', 'sorts', 'areas', 'wanna_teachs', 'wanna_learns', 'bodies', 'catalogs'));
    }
}
