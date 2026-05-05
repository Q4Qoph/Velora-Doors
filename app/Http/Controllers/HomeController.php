<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ContactAutoReplyMail;

class HomeController extends Controller
{
    //
    public function index()
    {
    
        $page = "Velora Doors – Crafted for Timeless Spaces";

        return view('pages.home', compact('page'));
    }

    public function about()
    {
        
        $page = "About Us - Velora Doors";

        return view('pages.about', compact('page'));
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
        // Notify the business
        Mail::to('contact@veloradoors.com')->send(new ContactFormMail($validated));
        // Send auto-reply to the customer
        Mail::to($validated['email'])->send(new ContactAutoReplyMail($validated));

        $message = 'Your message was sent successfully. We will get back to you shortly.';

        // If the request is AJAX (from our toast-enabled form), return JSON
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $message,
            ]);
        }

        // Fallback for non-JavaScript browsers
        return back()->with('success', $message);
    } catch (\Exception $e) {
        $errorMessage = 'Something went wrong sending your message. Please try WhatsApp or email us directly.';

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => $errorMessage,
            ], 500);
        }

        return back()->withInput()->with('error', $errorMessage);
    }
}
}
