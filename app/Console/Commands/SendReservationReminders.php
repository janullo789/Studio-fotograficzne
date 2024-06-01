<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reservation;
use App\Mail\ReservationReminder;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SendReservationReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:reservation-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reservation reminders 24 hours before the reservation time';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tomorrow = Carbon::now()->addDay()->format('Y-m-d');

        $reservations = Reservation::where('date', $tomorrow)->get();

        foreach ($reservations as $reservation) {
            $timeRange = explode(' - ', $reservation->hour);
            $startTime = $timeRange[0];
            $reservationDateTime = Carbon::parse($reservation->date . ' ' . $startTime);

            if ($reservationDateTime->diffInHours(Carbon::now()) <= 24) {
                Mail::to($reservation->email)->send(new ReservationReminder($reservation));
            }
        }

        return 0;
    }
}
