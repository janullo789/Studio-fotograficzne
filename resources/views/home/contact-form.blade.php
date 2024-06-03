<div class="position-relative overflow-hidden p-5 text-center">
    <div class="col-md-10 p-lg-5 mx-auto my-5">
        <h1 class="display-8 fw-normal text-background">Kontakt</h1>
        <div class="row p-4 d-flex flex-row">
            <div class="col-md-5">
                <div class="mt-10">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="text-lg-start p-2 mt-4">Pozostaw nam swój email, żebyśmy mogli się z Tobą skontaktować:</label>
                            <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Wprowadź swój email" required>
                            <button type="submit" class="btn send-button mt-5">Wyślij</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mx-5">
                <img src="{{ Vite::asset('resources/pictures/contact-photo.jpg') }}" alt="Opis zdjęcia" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>
