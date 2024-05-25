@extends('layouts.app')

@section('title', 'FotoStudio - Voucher')

@section('content')
    <div class="position-relative overflow-hidden p-md-3 m-md-3">
        <div class="col-md-8 p-lg-7 mx-auto my-4 text-center">
            <p class="fw-normal"> Studio fotograficzne “<strong>FotoStudio</strong>” w Krakowie to przestrzeń stworzona z myślą o najwyższej jakości sesjach zdjęciowych, znajdująca się w zabytkowej kamienicy w sercu malowniczego Podgórza. Nasze studio oferuje łącznie 190 m² powierzchni z wysokimi sufitami o wysokości 4,15 m, zapewniając przestrzeń idealną do realizacji najbardziej wymagających projektów fotograficznych.
            <hr>Nasza oferta obejmuje różnorodne vouchery na usługi fotograficzne, które mogą być idealnym prezentem na każdą okazję. </p>
        </div>
        <h1 class="fw-normal my-5 room-header text-center">Vouchery</h1>
        <div class="row">
            <div class="col-md-5 align-items-center p-lg-8 mx-auto my-4 d-flex flex-wrap">
                <p class="fw-normal">
                    <strong>Voucher na sesję portretową</strong><br>
                    Cena: 300 zł<br>
                    Opis: Podaruj bliskiej osobie indywidualną sesję portretową w naszym studiu. Voucher obejmuje 1 godzinę sesji oraz 5 wyretuszowanych zdjęć.
                </p>
                <p class="fw-normal">
                    <strong>Voucher na sesję ślubną</strong><br>
                    Cena: 1200 zł<br>
                    Opis: Wyjątkowy prezent dla nowożeńców – kompleksowa sesja ślubna, która obejmuje zarówno zdjęcia w studio, jak i w plenerze. Voucher obejmuje 4 godziny sesji oraz 50 wyretuszowanych zdjęć.
                </p>
                <p class="fw-normal">
                    <strong>Voucher na fotografię produktową</strong><br>
                    Cena: 50 zł za produkt<br>
                    Opis: Idealny prezent dla przedsiębiorców – profesjonalne zdjęcia produktów do katalogów, sklepów internetowych oraz materiałów promocyjnych. Voucher obejmuje zdjęcia i podstawową edycję.
                </p>
                <p class="fw-normal">
                    <strong>Voucher na sesję lifestyle’ową</strong><br>
                    Cena: 400 zł<br>
                    Opis: Podaruj naturalne i autentyczne zdjęcia w stylu lifestyle, idealne dla rodzin, par oraz indywidualnych projektów. Voucher obejmuje 2 godziny sesji oraz 20 wyretuszowanych zdjęć.
                </p>
            </div>
            <div  class="col-md-5 p-lg-8 my-3 d-flex flex-wrap">
                <div class="col-5 p-1">
                    <img src="{{ Vite::asset('resources/pictures/studio.jpg') }}" alt="Avatar" class="img-fluid my-2">
                </div>
                <div class="col-5 p-1">
                    <img src="{{ Vite::asset('resources/pictures/studio.jpg') }}" alt="Avatar" class="img-fluid my-2">
                </div>
                <div class="col-5 p-1">
                    <img src="{{ Vite::asset('resources/pictures/studio.jpg') }}" alt="Avatar" class="img-fluid my-2">
                </div>
                <div class="col-5 p-1">
                    <img src="{{ Vite::asset('resources/pictures/studio.jpg') }}" alt="Avatar" class="img-fluid my-2">
                </div>
            </div>
        </div>
    </div>
    @include('voucher.modal-button')
    @include('voucher.contact-modal')
@endsection
