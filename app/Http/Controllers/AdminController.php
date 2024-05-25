<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminResponse;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $messages = Message::all();
        $admin_token = $request->query('admin_token');
        return view('admin.messages.index', compact('messages', 'admin_token'));
    }

    public function destroy(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.messages', ['admin_token' => $request->query('admin_token')])->with('success', 'Message deleted successfully.');
    }

    public function respond(Request $request, $id)
    {
        $request->validate([
            'response' => 'required|string',
        ]);

        $message = Message::findOrFail($id);
        Mail::to($message->email)->send(new AdminResponse($message, $request->response));

        $message->responded = true; // Mark as responded
        $message->save();

        return redirect()->route('admin.messages', ['admin_token' => $request->query('admin_token')])->with('success', 'Response sent successfully.');
    }
}
