<div class="position-relative overflow-hidden p-5 p-md-6 m-md-3 text-center">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="display-8 fw-normal text-background">Kontakt</h1>
        <div class="row justify-content-around p-3">
            <div class="col-md-6">
                <div class="container mt-10">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="text-lg-start p-2">Pozostaw nam swój email, żebyśmy mogli się z Tobą skontaktować:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Wprowadź swój email" required>
                            <button type="submit" class="btn send-button mt-3">Wyślij</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ Vite::asset('resources/pictures/studio.jpg') }}" alt="Opis zdjęcia" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>
