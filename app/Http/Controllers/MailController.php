<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class MailController extends Controller
{
public function sendmail(Request $request){


    Mail::send('hello', array(
        'email' => $request->get('email')
    ), function($message)use($request){
        $message->from($request->email);
        $message->to('meerzamanktk@gmail.com')->subject
        ('Testing Subscription Mail');
    });

    return redirect()->back();
}

public function email_contact(Request $request){


    Mail::send('contact', array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone_number' => $request->get('phone_number'),
        'user_message' => $request->get('message'),
    ), function($message)use($request){
        $message->from($request->email);
        $message->to('meerzamanktk@gmail.com')->subject
        ( $request->get('subject'). $request->get('custom'));
    });


    return redirect()->back();
}

}
