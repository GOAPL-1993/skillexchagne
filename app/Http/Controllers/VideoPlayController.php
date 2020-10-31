<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoPlayController extends Controller
{
    // public function getName()
    // {
    //     $user = Auth::user();
    //     $login_username = $user->name;
    //     global $login_username;
    //     return view('includes.menu', compact('login_username'));
    // }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
