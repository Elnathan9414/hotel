<div id="calendar"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        editable: true,
        events: @json($calendarEvents),

        eventDrop: function(info) {
            // appel API pour update dates
        }
    });

    calendar.render();
});
</script>