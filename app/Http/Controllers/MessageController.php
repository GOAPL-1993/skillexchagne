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
            ->where(function ($query1) use ($wannaTalk, $user_id) {
                $query1->where('talkto_user_id', '=', $wannaTalk)
                    ->where('user_id', '=', $user_id);
            })
            ->orWhere(function ($query2) use ($wannaTalk, $user_id) {
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
        $messages = DB::table("message")
            ->where(function ($query1) use ($wannaTalk, $user_id) {
                $query1->where('talkto_user_id', '=', $wannaTalk)
                    ->where('user_id', '=', $user_id);
            })
            ->orWhere(function ($query2) use ($wannaTalk, $user_id) {
                $query2->where('talkto_user_id', '=', $user_id)
                    ->where('user_id', '=', $wannaTalk);
            })
            ->orderBy('id', 'desc')
            ->get();
        return view("pages.message", compact('user_id', 'wannaTalk', 'messages', 'talkto_username'));
    }

    public function getTalkName()
    {

        $user = Auth::user();
        $id = Auth::id();
        $username = $user->name;
        $user_id = $user->id;
        $talkto_user_id = DB::table("message")
            ->where('user_id', '=', $user_id)->value('talkto_user_id');
        $talkto_usernames = DB::table("users")
            ->where('id', '=', $talkto_user_id)->value('name');
    }
}
