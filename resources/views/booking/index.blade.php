@extends('layouts.app')

@section('title', 'FotoStudio - Rezerwacje')

@section('content')
    <h1 class="fw-normal my-3 room-header text-center">Kalendarz rezerwacji</h1>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="box-shadow">
                    @include('booking.room-picker')
                </div>
            </div>
            <div class="col-md-6">
                    @include('booking.calendar')
            </div>
        </div>
    </div>
    @include('booking.reservation-form')
@endsection

