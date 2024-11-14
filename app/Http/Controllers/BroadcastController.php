<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function index(){
        return view('send_message');
    }

    public function send(Request $request){
        $data = [
            "message" => $request->message
        ];

        event(new SendMessage($data));

        return redirect()->back();
    }
}
