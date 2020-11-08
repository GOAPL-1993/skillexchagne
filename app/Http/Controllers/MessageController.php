<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getTalk(Request $req)
    {
        $messages = DB::table("posts")->where('post_user_id', '=', $req->wannaTalk)->get();
        return view("pages.message", compact('messages'));
    }
}
