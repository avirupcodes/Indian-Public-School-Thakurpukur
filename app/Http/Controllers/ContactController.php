<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'message' => 'required|string',
        ]);

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('info@ipsthakurpukur.com')
                    ->subject('New Contact Message - IPS Thakurpukur')
                    ->replyTo($data['email']);
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
