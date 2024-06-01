<?php
namespace App\Http\Controllers;

use App\Mail\ReservationConfirmation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller{
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'room' => 'required|string|max:255',
            'hour' => 'required|string|max:255',
        ]);

        $reservation = Reservation::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'room' => $request->room,
            'hour' => $request->hour
        ]);

        Mail::to($request->email)->send(new ReservationConfirmation($reservation));

        return redirect()->back()->with('success', 'Twoja rezerwacja została zapisana!');
    }
    public function availableSlots(Request $request): \Illuminate\Http\JsonResponse
    {
        $date = $request->input('date');
        $room = $request->input('room');

        $bookedHours = Reservation::where('date', $date)
            ->where('room', $room)
            ->pluck('hour')
            ->toArray();

        $allHours = [
            "08:00 - 09:00", "09:00 - 10:00", "10:00 - 11:00",
            "11:00 - 12:00", "12:00 - 13:00", "13:00 - 14:00",
            "14:00 - 15:00"
        ];

        $availableHours = array_values(array_diff($allHours, array_values($bookedHours)));

        return response()->json($availableHours);
    }
}
