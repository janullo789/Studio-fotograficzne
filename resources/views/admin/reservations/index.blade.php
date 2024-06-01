@extends('layouts.app')

@section('title', 'Admin - Reservations')

@section('content')
    <style>
        .past-reservation {
            background-color: #f8f9fa;
            color: #6c757d;
        }
        .past-reservation td {
            text-decoration: line-through;
        }
    </style>
    <div class="container my-5">
        <h1>Reservations</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="GET" action="{{ route('admin.reservations') }}">
            <input type="hidden" name="admin_token" value="{{ $admin_token }}">
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ request('end_date') }}">
                </div>
                <div class="col-md-3 align-self-end">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        @foreach($reservations as $date => $dayReservations)
            <h2>{{ \Carbon\Carbon::parse($date)->format('Y-m-d') }}</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Room</th>
                    <th>Hour</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dayReservations as $reservation)
                    @php
                        $timeRange = explode(' - ', $reservation->hour);
                        $startTime = $timeRange[0];
                        $reservationDateTime = \Carbon\Carbon::parse($reservation->date . ' ' . $startTime);
                        $isPast = $reservationDateTime->isPast();
                    @endphp
                    <tr class="{{ $isPast ? 'past-reservation' : '' }}">
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->surname }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->room }}</td>
                        <td>{{ $reservation->hour }}</td>
                        <td>
                            <form action="{{ route('admin.reservations.cancel', ['id' => $reservation->id, 'admin_token' => $admin_token]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
