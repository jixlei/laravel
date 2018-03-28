<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        // 我们的工作
        $work =$this->ourWork();
        // 底部信息
        $footer = $this->footer();
        return view('services', compact("work", "footer"));
    }
}
