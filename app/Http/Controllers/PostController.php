<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\posts;

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
            // 'post_user_id' => $req['postUserid'],
            // 'post_username' => $req['postUsername'],
            // 'sort' => $req['postSort'],
            // 'area' => $req['postArea'],
            // 'wanna_teach' => $req['postWannaTeach'],
            // 'wanna_learn' => $req['postWannaLearn'],
            // 'body' => $req['postBody'],
            // 'catalog' => $req['postCatalog'],

            'post_user_id' => $req->postUserid,
            'post_username' => $req->postUsername,
            'sort' => $req->postSort,
            'area' => $req->postArea,
            'wanna_teach' => $req->postWannaTeach,
            'wanna_learn' => $req->postWannaLearn,
            'body' => $req->postBody,
            'catalog' => $req->postCatalog,

            // protected function updateVerifiedUser($user, array $input)
            // {
            //     $user->forceFill([
            //         'name' => $input['name'],
            //         'email' => $input['email'],
            //         'email_verified_at' => null,
            //     ])->save();

            //     $user->sendEmailVerificationNotification();
            // }

            // Validator::make($input, [
            //     'name' => ['required', 'string', 'max:255'],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //     'password' => $this->passwordRules(),
            // ])->validate();

        ]);
        $post = DB::table("posts")->get();
        // return response()->json($post);
        return redirect('/index'); //重新導向
    }
    public function showPost()
    {
        $posts = DB::table("posts")
            ->get();
        return view('pages.index', compact('posts'));
    }

    public function showPostDetail($id)
    {
        $posts = DB::table("posts")->where('id', '=', $id)->get();
        return view('pages.index', compact('posts'));
    }
}
