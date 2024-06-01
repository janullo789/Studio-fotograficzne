<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="Product">
            <img src="{{ Vite::asset('resources/pictures/logo_napis_white.png') }}" alt="LogoHeader" class="img-fluid mb-1" style="max-width: 250px;">
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('home') }}">Strona główna</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('room') }}">Sale do wynajęcia</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('pricing') }}">Cennik</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('voucher') }}">Vouchery</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('booking') }}">Rezerwacje</a>
    </nav>
</header>
