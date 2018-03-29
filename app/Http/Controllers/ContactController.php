<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        // 地图
        $map = Contact::where('isbottom', 0)->orderby('id', 'desc')->first();
        // 底部信息
        $footer = $this->footer();
        return view('contact', compact("map", "footer"));
    }
}
