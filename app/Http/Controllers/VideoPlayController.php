<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoPlayController extends Controller
{
    public function getName() {
        
        $user_name = "Guest";
        // if (Auth::check()) {
        //     $user = Auth::user();
        //     $username = $user->name;
            return view('pages.index', compact('username'));
        // }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
