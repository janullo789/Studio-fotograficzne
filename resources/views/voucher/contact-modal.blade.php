<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header d-flex flex-column">
                <h5 class="modal-title" id="contactModalLabel">Formularz kontaktowy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <svg fill="#808276" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class = "icon" viewBox="0 0 32 32" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M10.398,22.811h4.618v4.964h-4.618V22.811z M21.058,1.594C19.854,0.532,17.612,0,14.33,0c-3.711,0-6.205,0.514-7.482,1.543 c-1.277,1.027-1.916,3.027-1.916,6L4.911,8.551h4.577l-0.02-1.049c0-1.424,0.303-2.377,0.907-2.854 c0.604-0.477,1.814-0.717,3.632-0.717c1.936,0,3.184,0.228,3.74,0.676c0.559,0.451,0.837,1.457,0.837,3.017 c0,1.883-0.745,3.133-2.237,3.752l-1.797,0.766c-1.882,0.781-3.044,1.538-3.489,2.27c-0.442,0.732-0.665,2.242-0.665,4.529h4.68 v-0.646c0-1.41,0.987-2.533,2.965-3.365c2.03-0.861,3.343-1.746,3.935-2.651c0.592-0.908,0.888-2.498,0.888-4.771 C22.863,4.625,22.261,2.655,21.058,1.594z"></path> </g> </g></svg>
                <p>Jeśli masz jakieś pytania lub chcesz zakupić voucher pozostaw nam tutaj swój namiar.</p>
            </div>
            <div class="modal-body">
                <form action="{{ route('contact.store') }}" method="POST" class="reservation-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Imię *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefon</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="question" class="form-label">Pytanie *</label>
                        <textarea class="form-control" id="question" name="question" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="reserve-button m-5">Wyślij</button>
                </form>
            </div>
        </div>
    </div>
</div>
