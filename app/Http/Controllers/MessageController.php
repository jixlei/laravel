<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function newmessage(Request $request)
    {
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $email = $request->input('email');
        $content = $request->input('content');

        $message = new Message;
        $message->name = $name;
        $message->email = $email;
        $message->mobile = $mobile;
        $message->content = $content;
        $result = $message->save();
        return $result ? json_encode(['code'=>1,'msg'=>'sucess']) : json_encode(['code'=>0,'msg'=>'fail']);
    }
}
