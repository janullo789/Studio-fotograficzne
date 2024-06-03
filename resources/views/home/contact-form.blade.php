<div class="position-relative overflow-hidden p-5 text-center">
    <div class="col-md-10 p-lg-5 mx-auto my-5">
        <h1 class="display-8 fw-normal text-background">Bądź na bieżąco</h1>
        <div class="row p-4 d-flex flex-row justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="mt-10">
                    <form method="POST" action="{{ route('newsletter.subscribe') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="text-lg-start p-2 mt-4">Pozostaw nam swój email, aby dołączyć do newslettera:</label>
                            <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Wprowadź swój email" required>
                            <button type="submit" class="btn send-button mt-4">Wyślij</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mx-5">
                <img src="{{ Vite::asset('resources/pictures/contact-photo.jpg') }}" alt="Opis zdjęcia" class="img-fluid img-fluid-contact">
            </div>
        </div>
    </div>
</div>
