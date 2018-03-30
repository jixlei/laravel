<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\About;
use App\Contact;
use App\Work;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // 底部
    protected function footer()
    {
        $about = About::where('type', 0)->orderby('id', 'desc')->first();
        $contact = Contact::where('isbottom', 1)->orderby('id', 'desc')->first();
        return array('about'=>$about, 'contact'=>$contact);
    }

    // 我们的工作
    public function ourWork()
    {
        $work = Work::where('type', 1)->orderby('id', 'desc')->take(4)->get();
        return $work;
    }

    // 我们做什么
    public function weDo()
    {
        $wedo = Work::where('type', 0)->orderby('id', 'desc')->take(4)->get();
        return $wedo;
    }
}
