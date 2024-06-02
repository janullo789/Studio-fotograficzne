<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterConfirmation;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // Send confirmation email
        Mail::to($request->email)->send(new NewsletterConfirmation($request->email));

        return redirect()->back()->with('success', 'Dziękujemy za zapisanie się do newslettera! Sprawdź swoją skrzynkę pocztową, aby odebrać zniżkę 20% na pierwszą usługę.');
    }
}
