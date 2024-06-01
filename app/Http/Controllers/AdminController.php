<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminResponse;
use Carbon\Carbon;

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

        $message->responded = true;
        $message->save();

        return redirect()->route('admin.messages', ['admin_token' => $request->query('admin_token')])->with('success', 'Response sent successfully.');
    }

    public function reservations(Request $request)
    {
        $admin_token = $request->query('admin_token');
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');

        $query = Reservation::query();

        if ($start_date) {
            $query->where('date', '>=', $start_date);
        }

        if ($end_date) {
            $query->where('date', '<=', $end_date);
        }

        $reservations = $query->orderBy('date', 'desc')
            ->orderBy('hour')
            ->get()
            ->groupBy('date');

        return view('admin.reservations.index', compact('reservations', 'admin_token', 'start_date', 'end_date'));
    }

    public function cancelReservation(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.reservations', ['admin_token' => $request->query('admin_token')])->with('success', 'Reservation canceled successfully.');
    }
}
