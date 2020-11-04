<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search($catalog)
    {
        $searchdata = DB::table("posts")->where('catalog', '=', $catalog)->get();
        $searchposts['data'] = $searchdata;
        echo json_encode($searchposts);
        exit;
        // return view('pages.search', compact('searchposts'));
    }

    public function getthere()
    {
        return view('pages.search');
    }
}
