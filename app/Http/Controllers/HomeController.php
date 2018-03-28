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
        // 轮播图
        $focusImage = Product::where('isfocus', 1)->orderby('id', 'desc')->get();
        return view('home', compact("focusImage"));
    }
}
