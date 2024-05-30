<div class="container-cal">
    <div class="header-cal">
        {{--
                <button class="today-button" onclick="moveToToday()">DZIŚ</button>
        --}}
        <button class="next-week-button" id="prev-week-button">&lt</button>
        <div class="date-range" id="date-range">27. MAJ - 2. CZE</div>
        <button class="next-week-button" id="next-week-button">&gt;</button>
    </div>
    <div class="week-days">
            <button class="day selected" data-day="27" onclick="selectDay(this)">Pn<br><span class="day-number">27</span></button>
            <button class="day" data-day="28" onclick="selectDay(this)">Wt<br><span class="day-number">28</span></button>
            <button class="day" data-day="29" onclick="selectDay(this)">Śr<br><span class="day-number">29</span></button>
            <button class="day" data-day="30" onclick="selectDay(this)">Cz<br><span class="day-number">30</span></button>
            <button class="day" data-day="31" onclick="selectDay(this)">Pt<br><span class="day-number">31</span></button>
            <button class="day" data-day="1" onclick="selectDay(this)">So<br><span class="day-number">1</span></button>
            <button class="day" data-day="2" onclick="selectDay(this)">Nd<br><span class="day-number">2</span></button>
    </div>
    <div class="time-slots"></div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var nextWeekButton = document.getElementById('next-week-button');
        var prevWeekButton = document.getElementById('prev-week-button');
        var dateRangeDiv = document.getElementById('date-range');
        var currentDate = new Date();
        currentDate.setDate(currentDate.getDate() - (currentDate.getDay() + 6) % 7);

        function updateDateRange(startDate) {
            var endOfWeek = new Date(startDate);
            endOfWeek.setDate(startDate.getDate() + 6);
            var formattedStartDate = formatDate(startDate);
            var formattedEndDate = formatDate(endOfWeek);
            var year = endOfWeek.getFullYear();
            dateRangeDiv.textContent = formattedStartDate + ' - ' + formattedEndDate + ' ' + year;
        }

        function formatDate(date) {
            var day = date.getDate();
            var month = date.toLocaleString('default', { month: 'long' });
            return day + ' ' + month;
        }

        function updateWeekDays(startDate) {
            var dayNumberElements = document.querySelectorAll('.day-number');
            var today = new Date();
            for (var i = 0; i < dayNumberElements.length; i++) {
                var dayDate = new Date(startDate);
                dayDate.setDate(startDate.getDate() + i);
                dayNumberElements[i].textContent = dayDate.getDate();
                dayNumberElements[i].parentElement.classList.remove('selected');
                if (dayDate.toDateString() === today.toDateString()) {
                    dayNumberElements[i].parentElement.classList.add('selected');
                }
            }
        }

        nextWeekButton.addEventListener('click', function() {
            var newDate = new Date(currentDate);
            newDate.setDate(newDate.getDate() + 7);
            updateDateRange(newDate);
            updateWeekDays(newDate);
            currentDate = newDate;
        });

        prevWeekButton.addEventListener('click', function() {
            var newDate = new Date(currentDate);
            newDate.setDate(newDate.getDate() - 7);
            updateDateRange(newDate);
            updateWeekDays(newDate);
            currentDate = newDate;
        });

        updateDateRange(currentDate);
        updateWeekDays(currentDate);

        // function selectHour(button) {
        //     var allButtons = document.querySelectorAll('.time-slots .reserve-button');
        //     allButtons.forEach(function(btn) {
        //         btn.classList.remove('selected-hour');
        //     });
        //     button.classList.add('selected-hour');
        //
        //     var hiddenRoom = document.getElementById('hiddenRoom');
        //     var hiddenTime = document.getElementById('hiddenTime');
        //     var hiddenDate = document.getElementById('hiddenDate');
        //     hiddenTime.value = "XYZ";
        // }
        //
        // var hourButtons = document.querySelectorAll('.time-slots .reserve-button');
        // console.log("FFF");
        // hourButtons.forEach(function(button) {
        //     button.addEventListener('click', function() {
        //         selectHour(this);
        //         console.log("ELo")
        //     });
        // });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const roomSelect = document.getElementById('roomSelect');
        const date = getDate()
        var selectedDayButton = document.querySelector('.day');

        const timeSlotContainer = document.querySelector('.time-slots');

        function fetchAvailableHours() {
            const room = roomSelect.value;
            if (date && room) {
                fetch(`/available-slots?date=${date}&room=${room}`)
                    .then(response => response.json())
                    .then(data => {
                        updateAvailableHours(data);
                    });

            }
        }

        function updateAvailableHours(hours) {
            timeSlotContainer.innerHTML = '';
            console.log(hours)
            hours.forEach(hour => {
                const timeSlotDiv = document.createElement('div');
                timeSlotDiv.classList.add('time-slot');
                timeSlotDiv.innerHTML = `
                <span class="time">${hour}</span>
                <button type="button" class="reserve-button" data-bs-toggle="modal" data-bs-target="#reservationForm">REZERWUJ</button>
            `;
                timeSlotContainer.appendChild(timeSlotDiv);
            });

            function selectHour(button) {
                var allButtons = document.querySelectorAll('.time-slots .reserve-button');
                allButtons.forEach(function(btn) {
                    btn.classList.remove('selected-hour');
                });
                button.classList.add('selected-hour');

                var selectedRoomText = document.getElementById('selectedRoomText');
                var selectedTimeText = document.getElementById('selectedTimeText');
                var selectedDateText = document.getElementById('selectedDateText');
                var hiddenRoom = document.getElementById('hiddenRoom');
                var hiddenTime = document.getElementById('hiddenTime');
                var hiddenDate = document.getElementById('hiddenDate');



                console.log(selectedTimeText);
                selectedTimeText.textContent = "XU";
                hiddenTime.value = "XYZ";
                console.log("ELo")

            }

            var hourButtons = document.querySelectorAll('.time-slots .reserve-button');
            console.log("FFF");
            hourButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    selectHour(this);
                });
            });
        }

        function getDate(){
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
            var monthNumber = months[dateMonth.toLowerCase()];
            var fullFormattedDate = year + "-" + monthNumber + "-" + day;
            var dateObj = new Date(fullFormattedDate);
            return dateObj.toISOString().split('T')[0];
        }

        roomSelect.addEventListener('change', fetchAvailableHours);
        //selectedDayButton.addEventListener('change', fetchAvailableHours);




    });

    function selectDay(button) {
        var allButtons = document.querySelectorAll('.week-days .day');
        allButtons.forEach(function(btn) {
            btn.classList.remove('selected');
        });
        button.classList.add('selected');
    }

    var dayButtons = document.querySelectorAll('.week-days .day');
    dayButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            selectDay(this);
        });
    });

</script>
