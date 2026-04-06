<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function doors()
    {
        return view('pages.doors');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:100',
            'email'        => 'required|email',
            'phone_code'   => 'required|string|max:10',
            'phone'        => 'required|string|max:30',
            'country'      => 'required|string|max:60',
            'inquiry_type' => 'required|string|max:60',
            'subject'      => 'required|string|max:150',
            'message'      => 'required|string',
        ]);

        try {
            Mail::to('Info@veloradoors.com')->send(new ContactFormMail($validated));
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Something went wrong sending your message. Please try WhatsApp or email us directly.');
        }

        return back()->with('success', 'Your message was sent successfully. We will get back to you shortly.');
    }
}
