<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Message;
class ContactUsController extends Controller
{
    //Show The Conttact Us Form
    public function showForm(){
        return view('contact');
    }

    //Create a Message Record and Store it in Database
    public function storeMessage(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|string|min:5|max:255',
            'phone' => 'required|numeric|digits:11'
        ],
        [
            'email.required' => 'بخش ایمیل نمی تواند خالی باشد.',
            'email.email' => 'ایمیل خود را به صورت صحیح وارد کنید.',
            'phone.required' => 'بخش شماره تلفن همراه نمی تواند خالی باشد.',
            'phone.numeric' => 'شماره تلفن باید متشکل از اعداد باشد.',
            'phone.digits' => 'شماره موبایل باید 11 رقم باشد.',
            'message.required' => 'لطفا نظر و پیشنهادات خود را تایپ کنید.',
            'message.min' => 'پیام شما نمی تواند کمتر از 5 کاراکتر باشد.',
            'message.max' => 'پیام شما نمی تواند بیشتر از 255 کاراکتر باشد.',
        ]);

        $message = Message::create([
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

        return redirect(route('contactForm'))
            ->with('status',' عزیز پیام شما برای تیم پشتیبانی ارسال شد. باتشکر از شما '.$request->input('email'));
    }
}

