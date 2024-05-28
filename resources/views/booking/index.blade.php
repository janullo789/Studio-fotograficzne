@extends('layouts.app')

@section('title', 'FotoStudio - Rezerwacje')

@section('content')
    <div class="container mt-5">
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

