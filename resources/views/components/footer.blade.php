<div class="spacer"></div>
<footer class="site-footer py-0 mt-auto text-white">
    <div class="container custom-width">
        <div class="row equal-spacing" style="margin-top: 50px;">
            <div class="col-md-4 mb-1 text-center">
                <h6 class="text-uppercase information-header">Informacje</h6>
                <div class="contact-info">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">Strona główna</a></li>
                        <li><a href="{{ route('room') }}">Sale do wynajęcia</a></li>
                        <li><a href="{{ route('pricing') }}">Cennik</a></li>
                        <li><a href="{{ route('voucher') }}">Vouchery</a></li>
                        <li><a href="{{ route('booking') }}">Rezerwacje</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-1 logo-section">
                <img src="{{ Vite::asset('resources/pictures/LOGO.png') }}" alt="Logo Studio Photo" class="img-fluid mb-1" style="max-width: 200px;">
            </div>
            <div class="col-md-4 mb-1 text-center">
                <h6 class="text-uppercase contact-header">Kontakt</h6>
                <div class="contact-info">
                    <a href="mailto:info@studiophoto.com">info@fotostudio.com</a>
                    <span>Tel: +48 123 456 789</span>
                    <span>Adres: ul. Przykładowa 1, 12-345 Kraków</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-1">
                <h6 class="text-uppercase">Śledź nas</h6>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li class="mx-1">
                        <a href="#" aria-label="Facebook" class="social-icon">
                            <img src="{{ Vite::asset('resources/pictures/facebook.png') }}" alt="Facebook" class="img-fluid">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" aria-label="Instagram" class="social-icon">
                            <img src="{{ Vite::asset('resources/pictures/instagram.png') }}" alt="Instagram" class="img-fluid">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" aria-label="Twitter" class="social-icon">
                            <img src="{{ Vite::asset('resources/pictures/twitter.png') }}" alt="X" class="img-fluid">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-12 text-center">
                <p class="mb-0" style="font-size: 0.8em;">&copy; 2024 Foto-Studio. Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </div>
</footer>
