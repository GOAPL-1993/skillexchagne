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
        if (Auth::check()) {
            $talkto_username = DB::table("users")->where('id', '=', $req->wannaTalk)->value('name');
            $wannaTalk = $req->wannaTalk;
            $user_id = Auth::id();


            $messages = DB::table("message")
                ->where(function ($query1) use ($wannaTalk, $user_id) {
                    $query1
                        ->where('talkto_user_id', '=', $wannaTalk)
                        ->where('user_id', '=', $user_id);
                })
                ->orWhere(function ($query2) use ($wannaTalk, $user_id) {
                    $query2
                        ->where('talkto_user_id', '=', $user_id)
                        ->where('user_id', '=', $wannaTalk);
                })
                ->orderBy('id', 'desc')
                ->get();

            // $talkto_original_users_all = DB::table("message")
            //     ->where('message.user_id', '=', $user_id)
            //     ->join('users', 'message.talkto_user_id', '=', 'users.id')
            //     ->groupBy('users.name', 'users.id')
            //     ->get([
            //         'users.name', 'users.id'
            //     ]);


            $talkto_users_all = DB::table("message")
                ->where('message.talkto_user_id', '=', $user_id)
                ->join('users', 'message.user_id', '=', 'users.id')
                ->groupBy('users.name', 'users.id')
                ->get([
                    'users.name', 'users.id'
                ]);





            // $talkto_usernames_all = 
            // SELECT  distinct us2.name
            // from message msg
            // INNER JOIN users us2 on us2.id = msg.talkto_user_id
            // WHERE msg.user_id =1
            // 以上為郭先生示範


            return view("pages.message", compact('user_id', 'wannaTalk', 'messages', 'talkto_username', 'talkto_users_all'));
        } else {
            return view('auth.login');
        }
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
                $query1
                    ->where('talkto_user_id', '=', $wannaTalk)
                    ->where('user_id', '=', $user_id);
            })
            ->orWhere(function ($query2) use ($wannaTalk, $user_id) {
                $query2
                    ->where('talkto_user_id', '=', $user_id)
                    ->where('user_id', '=', $wannaTalk);
            })
            ->orderBy('id', 'desc')
            ->get();

        $talkto_users_all = DB::table("message")
            ->where('message.user_id', '=', $user_id)
            // ->orWhere('message.talkto_user_id', '=', $user_id)
            ->join('users', 'message.talkto_user_id', '=', 'users.id')
            // ->orderBy('message.created_at', 'desc')
            ->groupBy('users.name', 'users.id')
            ->get([
                'users.name', 'users.id'
            ]);

        return view("pages.message", compact('user_id', 'wannaTalk', 'messages', 'talkto_username', 'talkto_users_all'));
    }

    // public function getTalkName()
    // {
    //     $user = Auth::user();
    //     $user_id = $user->id;
    //     $talkto_user_id = DB::table("message")
    //         ->where('user_id', '=', $user_id)
    //         ->value('talkto_user_id');
    //     $talkto_usernames = DB::table("users")
    //         ->where('id', '=', $talkto_user_id)
    //         ->orderBy('created_at', 'desc')
    //         ->value('name');
    //     return view("includes.talktocatalog", compact('talkto_usernames'));
    // }
}
