<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

    $catalog = $_POST['']; 
        $searchposts = DB::table("posts")->where('catalog', '=', $catalog)->get();
        // $searchposts = DB::table("posts")->get();
        return view('pages.search', compact('catalog', 'searchposts'));
