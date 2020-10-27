<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        if ($username != "Guest"){
            return view('pages.post');
            $posts = Post::prderBy ('id', 'body')->get();
            return view ('posts', compact('posts'));
        } else {
            return view('auth.login');
        }
    }

    public function addPost (Request $request){
        $post = new Post();
        $post->sort = $request->sort;
        $post->area = $request->area;
        $post->wannaTeach = $request->wannaTeach;
        $post->wannaLearn = $request->wannaLearn;
        $post->body = $request->body;
        $post->catalog = $request->catalog;
        $post->save();
        return response()->json($post);
    }
}
