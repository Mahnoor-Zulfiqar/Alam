<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    //

public function saveContact(Request $request) {


    Mail::send('contact.form', array(
        'Name' => 'Usman',
        'email' => 'musmannazir12@gmail.com',
        'subject' => 'subject',
        'phone_number' => '11111',
        'user_message' => '111111111',
    ), function($message)use($request){
        $message->from('Hello@gmail.com');
        $message->to('musmannazir12@gmail.com');
    });

  echo "Sent";

}
}
