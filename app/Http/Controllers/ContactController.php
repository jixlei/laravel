<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // 底部信息
        $footer = $this->footer();
        return view('contact', compact("footer"));
    }
}
