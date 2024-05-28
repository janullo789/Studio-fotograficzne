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
    <div class="time-slots">
        <div class="time-slot">
            <span class="time">08:00 - 09:00</span>
            <button type="button" class="reserve-button"  data-bs-toggle="modal" data-bs-target="#reservationForm">REZERWUJ</button>
        </div>
        <div class="time-slot">
            <span class="time">09:00 - 10:00</span>
            <button class="reserve-button">REZERWUJ</button>
        </div>
        <div class="time-slot">
            <span class="time">10:00 - 11:00</span>
            <button class="reserve-button">REZERWUJ</button>
        </div>
        <div class="time-slot">
            <span class="time">11:00 - 12:00</span>
            <button class="reserve-button">REZERWUJ</button>
        </div>
        <div class="time-slot">
            <span class="time">12:00 - 13:00</span>
            <button class="reserve-button">REZERWUJ</button>
        </div>
        <div class="time-slot">
            <span class="time">13:00 - 14:00</span>
            <button class="reserve-button">REZERWUJ</button>
        </div>
        <div class="time-slot">
            <span class="time">14:00 - 15:00</span>
            <button class="reserve-button">REZERWUJ</button>
        </div>
    </div>
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
            dateRangeDiv.textContent = formattedStartDate + ' - ' + formattedEndDate;
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
