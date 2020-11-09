<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class MessageController extends Controller
{
    public function getTalk(Request $req)
    {
        $talkto_username = DB::table("users")->where('id', '=', $req->wannaTalk)->value('name');
        $wannaTalk = $req->wannaTalk;
        $user_id = Auth::id();
        $messages = DB::table("message")
            // ->where('talkto_user_id', '=', $req->wannaTalk)


            ->where(function ($query1) {
                $user_id = Auth::id();
                global $wannaTalk;

                $query1->where('talkto_user_id', '=', $wannaTalk)
                    ->where('user_id', '=', $user_id);
            })
            ->orWhere(function ($query2) {
                $user_id = Auth::id();
                global $wannaTalk;

                $query2->where('talkto_user_id', '=', $user_id)
                    ->where('user_id', '=', $wannaTalk);
            })


            ->orderBy('id', 'desc')
            ->get();

        return view("pages.message", compact('user_id', 'wannaTalk', 'messages', 'talkto_username'));
    }

    public function addMessage(Request $req)
    {
        DB::table("message")->insert([
            'user_id' => $req->user_id,
            'talkto_user_id' => $req->wannaTalk,
            'message' => $req->message,

        ]);
        $talkto_username = DB::table("users")->where('id', '=', $req->wannaTalk)->value('name');
        $wannaTalk = $req->wannaTalk;
        $user_id = Auth::id();
        $messages = DB::table("message")->where('talkto_user_id', '=', $req->wannaTalk)->orderBy('id', 'desc')->get();
        return view("pages.message", compact('user_id', 'wannaTalk', 'messages', 'talkto_username'));
    }
}
