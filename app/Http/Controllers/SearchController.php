<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search()
    {
        $searchposts = DB::table("posts")->get();
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            search($searchposts);
        }
        return view('pages.search', compact('searchposts'));
    }
}
