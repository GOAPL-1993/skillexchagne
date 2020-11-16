<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyPostController extends Controller
{

    public function mypost()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
<<<<<<< HEAD
        $myposts = DB::table("posts")->where('post_username', '=', $username)
         ->get();
=======
        $myposts = DB::table("posts")->where('post_username', '=', $username)->get();
>>>>>>> 5110f36074f63940cb3501e0162739f81c382906
        return view("pages.mypost", compact('myposts'));
    }

    public function delete($id)
    {
        DB::table("posts")->where('id', '=', $id)->delete();
        //在資料表中找該id的對象，->delete代表delete
        return redirect('/mypost'); //重新導向
    }

    public function wannaUpdate($id)
    {
        $wannaupdateposts = DB::table("posts")->where('id', '=', $id)->get();
        return view("pages.updatepost", compact('wannaupdateposts'));
    }

    public function updatePost(Request $req)
    { //Request是一個模組，把資料拿過來用

        DB::table("posts")->where('id', $req->postid)->update([
            'post_user_id' => $req->postUserid,
            'post_username' => $req->postUsername,
            'sort' => $req->postSort,
            'area' => $req->postArea,
            'wanna_teach' => $req->postWannaTeach,
            'wanna_learn' => $req->postWannaLearn,
            'body' => $req->postBody,
            'catalog' => $req->postCatalog,
        ]);

        return redirect('/mypost'); //重新導向
    }
}
