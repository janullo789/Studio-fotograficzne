<div class="modal fade" id="reservationForm" tabindex="-1" aria-labelledby="reservationFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column">
                <h5 class="modal-title" id="contactModalLabel">Formularz rezerwacji</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <p>Wypełnij formularz w celu doknonania rezerwacji</p>
                <div class="reservation-form-header d-flex flex-row">
                    <div class="d-flex me-3">
                        <svg fill="#808276" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="icon">
                            <path d="M27 18.039L16 9.501 5 18.039V14.56l11-8.54 11 8.538v3.481zm-2.75-.31v8.251h-5.5v-5.5h-5.5v5.5h-5.5v-8.25L16 11.543l8.25 6.186z"></path>
                        </svg>
                        <p id="selectedRoomText" class="mb-3 ms-2"></p>
                    </div>
                    <div class="d-flex me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#808276" role="img" aria-hidden="true" class="icon">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z"></path>
                        </svg>
                        <p id="selectedTimeText" class="mb-3 ms-2"></p>
                    </div>
                    <div class="d-flex me-3">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
                            <path d="M20 10V7C20 5.89543 19.1046 5 18 5H6C4.89543 5 4 5.89543 4 7V10M20 10V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V10M20 10H4M8 3V7M16 3V7" stroke="#808276" stroke-width="2" stroke-linecap="round"></path>
                            <rect x="6" y="12" width="3" height="3" rx="0.5" fill="#808276"></rect>
                            <rect x="10.5" y="12" width="3" height="3" rx="0.5" fill="#808276"></rect>
                            <rect x="15" y="12" width="3" height="3" rx="0.5" fill="#808276"></rect>
                        </svg>
                        <p id="selectedDateText" class="mb-3 ms-2"></p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('reservation.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Imię *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Nazwisko *</label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefon</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <input type="hidden" id="hiddenRoom" name="room">
                    <input type="hidden" id="hiddenTime" name="hour">
                    <input type="hidden" id="hiddenDate" name="date">
                    <button class="reserve-button" id="reserve-button-form">REZERWUJ</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var roomSelect = document.getElementById('roomSelect');
        //var reserveButton = document.getElementById('reserve-button');
        // var reserveButton = document.querySelector('.time-slots .reserve-button.selected-hour');
        var reserveButton = document.querySelector('.time-slots .reserve-button.selected-hour');

        console.log(reserveButton);

        var selectedRoomText = document.getElementById('selectedRoomText');
        var selectedTimeText = document.getElementById('selectedTimeText');
        var selectedDateText = document.getElementById('selectedDateText');
        var hiddenRoom = document.getElementById('hiddenRoom');
        var hiddenTime = document.getElementById('hiddenTime');
        var hiddenDate = document.getElementById('hiddenDate');

        var months = {
            "styczeń": "01",
            "luty": "02",
            "marzec": "03",
            "kwiecień": "04",
            "maj": "05",
            "czerwiec": "06",
            "lipiec": "07",
            "sierpień": "08",
            "wrzesień": "09",
            "październik": "10",
            "listopad": "11",
            "grudzień": "12"
        };

        reserveButton.addEventListener('click', function() {
            var selectedRoom = roomSelect.options[roomSelect.selectedIndex].text;

            if (selectedRoom === "Wybierz salę") {
                selectedRoom = "";
            }
            selectedRoomText.textContent = selectedRoom;
            hiddenRoom.value = selectedRoom;

            console.log(this.parent)
            var timeSlot = this.parent.querySelector('.time').textContent;
            selectedTimeText.textContent = timeSlot;
            hiddenTime.value = timeSlot;

            var selectedDayButton = document.querySelector('.week-days .day.selected');
            var day = selectedDayButton ? selectedDayButton.dataset.day : "Brak wybranej daty";
            var month = document.querySelector('.date-range').textContent
            var dateSplitted = month.split(" ");
            if(day > parseInt(dateSplitted[0])){
                var dateMonth = dateSplitted[1]
            }else {
                dateMonth = dateSplitted[4]
            }
            var year =  dateSplitted[5]
            var fullDate = day + " " + dateMonth + " " + year;
            selectedDateText.textContent = fullDate;

            var monthNumber = months[dateMonth.toLowerCase()];
            var fullFormattedDate = year + "-" + monthNumber + "-" + day;
            console.log(fullFormattedDate)
            var dateObj = new Date(fullFormattedDate);
            var formattedDate = dateObj.toISOString().split('T')[0];
            console.log(formattedDate)
            hiddenDate.value = formattedDate;
        });
    });
</script>
