@extends('layouts.app')

@section('title', 'FotoStudio - Strona Główna')

@section('content')
    <div class="position-relative overflow-hidden p-4 p-md-5 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5"></div>
        <img src="{{ Vite::asset('resources/pictures/studio.jpg') }}" alt="Opis zdjęcia" class="background-img">
    </div>
    <div class="position-relative overflow-hidden p-4 p-md-1 m-md-3 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-2">
            <h1 class="display-8 fw-normal text-background">Przeżyj z nami niezapomnianą sesję</h1>
            <a class="btn btn-outline-secondary" href="#">Dowiedz się więcej</a>
        </div>
    </div>
    @include('home.about')
    @include('home.services')
    @include('home.contact-form')
    @include('home.gallery')
@endsection
