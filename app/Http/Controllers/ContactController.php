<?php

namespace App\Http\Controllers;

use App\Mail\ContactConfirmation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'question' => 'required|string',
        ]);

        $message = Message::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'question' => $request->question,
        ]);

        Mail::to($request->email)->send(new ContactConfirmation($message));

        return redirect()->back()->with('success', 'Twoja wiadomość została wysłana!');
    }
}
