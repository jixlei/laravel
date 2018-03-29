<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    public function index()
    {
        // 我们的服务
        $services = Service::orderby('id', 'desc')->get();
        $services = object_chunk($services, 2);
        // 我们的工作
        $work =$this->ourWork();
        // 底部信息
        $footer = $this->footer();
        return view('services', compact("services", "work", "footer"));
    }
}
