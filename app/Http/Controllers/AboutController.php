<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index()
    {
        // 我们的历史
        $history = About::where('type', 1)->orderby('id', 'desc')->first();
        // 为什么选择我们
        $choose = About::where('type', 2)->orderby('id', 'desc')->first();
        // 我们的团队
        $team = About::where('type', 3)->orderby('id', 'desc')->get();
        // 我们的工作
        $work =$this->ourWork();
        // 底部信息
        $footer = $this->footer();
        return view('about', compact("history", "choose", "team", "work", "footer"));
    }
}
