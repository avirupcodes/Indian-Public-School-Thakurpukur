<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdmissionController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
            'guardian_name' => 'required',
            'grade' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'consent' => 'accepted'
        ]);

        $data = $request->all();

        Mail::send('emails.admission_enquiry', $data, function ($message) use ($data) {
            $message->to('info@ipsthakurpukur.com') // CHANGE THIS
                    ->subject('New Admission Enquiry - IPS Thakurpukur');
        });

        return back()->with('success', 'Your enquiry has been submitted successfully!');
    }
}
