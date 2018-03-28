<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\About;
use App\Contact;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function footer()
    {
        $about = About::where('isbottom', 1)->orderby('id', 'desc')->first();
        $contact = Contact::where('isbottom', 1)->orderby('id', 'desc')->first();
        return array('about'=>$about, 'contact'=>$contact);
    }
}
