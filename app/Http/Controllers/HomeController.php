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
        // 热门产品
        $hotproduct = Product::where('ishot', 1)->orderby('id', 'desc')->take(12)->get();
        $hotproduct = object_chunk($hotproduct, 4);
        // 我们做什么
        $wedo = $this->weDo();
        // 我们的工作
        $work =$this->ourWork();
        // 底部信息
        $footer = $this->footer();
        return view('home', compact("focusImage", "hotproduct", "wedo", "work", "footer"));
    }
}
