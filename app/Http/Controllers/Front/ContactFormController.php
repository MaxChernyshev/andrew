<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('front.contact.contact');
    }

//    public function send(ContactFormRequest $request)
//    {
//        Mail::to(env('MAIL_USERNAME'))->send(new ContactForm($request->validated()));
//
//        return redirect('/')->with('success', 'Thank you! your message sent successfully.');
//    }
//
//    public function reloadCaptcha()
//    {
//        return response()->json(['captcha'=> captcha_img()]);
//    }
}
