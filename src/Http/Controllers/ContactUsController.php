<?php

namespace Kushal\ContactUs\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Kushal\ContactUs\Mail\ContactMail;
use Kushal\ContactUs\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index(){
        return view('contactUs::contact-us-form');
    }

    public function sendEmail(Request $request){
        $data['mail_content'] = $request->all();
        Mail::to(config('contactUs.send_email_to'))->send(new ContactMail($data));
        ContactUs::create($request->all());
        return redirect(route('contact'));
    }
}
