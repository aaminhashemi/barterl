<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class AdminMessageController extends Controller{
    public function index(){
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        $messages=Message::all();
        return view('admin.Message.index',compact('messages'));

    }
    public function show(Message $message){
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        return view('admin.Message.show',compact('message'));
    }

    public function delete(Message $message){
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        $message->delete();
        return back();
    }
}
