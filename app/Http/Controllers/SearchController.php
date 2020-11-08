<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search($catalog)
    {
        $searchposts = DB::table("posts")->where('catalog', '=', $catalog)->get();
        // $searchposts = DB::table("posts")->get();
        return view('pages.search', compact('catalog', 'searchposts'));
    }

    public function searchArea(Request $req)
    {
        $searchposts = DB::table("posts")->where('area', '=', $req->searchArea)->get();
        $area = $req->searchArea;
        return view('pages.search', compact('area', 'searchposts'));
    }
}
