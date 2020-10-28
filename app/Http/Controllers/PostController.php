<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        if ($username != "Guest") {
            return view('pages.post');
            $posts = Post::orderBy('id', 'body')->post();
            return view('posts', compact('posts'));
        } else {
            return view('auth.login');
        }
    }
    function addPost(Request $request)
    {
        $post = new Post();
        $post->sort = $request->sort;
        $post->area = $request->area;
        $post->wanna_teach = $request->wanna_teach;
        $post->wanna_learn = $request->wanna_learn;
        $post->body = $request->body;
        $post->catalog = $request->catalog;
        $post->save();
        return response()->json($post);

        // return $request->input();
        // $request->validate([
        //     'postSort' => 'required',
        //     'postArea' => 'required',
        //     'postWannaTeach' => 'required',
        //     'postWannaLearn' => 'required',
        //     'postBody' => 'required',
        //     'postCatalog' => 'required',
        // ]);


        return redirect('/');
    }
}
