<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $focus = Product::where('isfocus', 1)->orderby('id', 'desc')->get();
        return view('home', compact("focus"));
    }
}
