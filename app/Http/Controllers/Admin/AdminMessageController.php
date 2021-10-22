<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class AdminMessageController extends Controller{
    public function index(){
        $messages=Message::all();
        return view('admin.Message.index',compact('messages'));

    }
    public function show(Message $message){
        return view('admin.Message.show',compact('message'));
    }

    public function delete(Message $message){
        $message->delete();
        return back();
    }
}