<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function managepost()
    {
        $manageposts = DB::table("posts")->get();
        return view("pages.managepost", compact('manageposts'));
    }

    public function managecatalog()
    {
        $managecatalogs = DB::table("catalog")->get();
        return view("pages.managecatalog", compact('managecatalogs'));
    }

    public function managearea()
    {
        $manageareas = DB::table("post_area")->get();
        return view("pages.managearea", compact('manageareas'));
    }

    public function manageaccount()
    {
        $manageaccounts = DB::table("users")->get();
        return view("pages.manageaccount", compact('manageaccounts'));
    }
}
