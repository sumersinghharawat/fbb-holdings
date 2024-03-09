<?php

namespace App\Http\Controllers;

use App\Mail\AdminSendMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function index(Request $request){

        // dd($request);

        $MailData = [
            'title' =>  env('APP_NAME'),
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'message' => $request->message,
        ];

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new AdminSendMail($MailData));
        Mail::to($request->email)->send(new SendMail($MailData));

        // dd('Success! Email has been sent successfully.');

        return response()->json("Thank you for request, We will get back to you soon!", 201);
    }
}
