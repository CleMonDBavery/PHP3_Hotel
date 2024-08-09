<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',


        ]);


        $mail_data = [
            'recipient' => 'hello@example.com',
            'fromName' => $request->name,
            'fromEmail' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message,
        ];

        Mail::send('email-template', $mail_data, function ($message) use ($mail_data) {
            $message
                ->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'], $mail_data['fromName'])
                ->subject($mail_data['subject']);
        });


        return redirect()->back()->with('success', 'Email đã được gửi!');
    }
}
