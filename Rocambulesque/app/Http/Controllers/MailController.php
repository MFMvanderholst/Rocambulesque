<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
    public function index()
    {
        $data = [
          'subject' => 'Mail',
          'body' => 'Hello this is my email delivery'
        ];

        try {
            Mail::to('schooltesten9@gmail.com')->send(new MailNotify($data));
            return response()->json(['Great check your mail']);
        } catch (\Exception $th) {
            return response()->json(['Something went wrong']);
        }
    }
}
