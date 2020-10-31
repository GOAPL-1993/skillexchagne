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
        $myposts = DB::table("posts")->where('post_username', '=', $username)->get();
        return view("pages.mypost", compact('myposts'));
    }
    
    public function delete($id)
    {
        DB::table("posts")->where('id', '=', $id)->delete();
        //在資料表中找該id的對象，->delete代表delete
        return redirect('/index'); //重新導向
    }

}
