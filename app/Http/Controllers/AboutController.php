<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // 我们的工作
        $work =$this->ourWork();
        // 底部信息
        $footer = $this->footer();
        return view('about', compact("work", "footer"));
    }
}
