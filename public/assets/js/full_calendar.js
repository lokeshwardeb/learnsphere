document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        // initialView: 'dayGridMonth',
        headerToolbar: {
            start: 'title', // will normally be on the left. if RTL, will be on the right
            center: '',
            // end: 'today dayGridMonth,timeGridWeek,dayGridWeek,timeGridDay,monthGridYear prev,next'       
            end: 'dayGridMonth,dayGridWeek,timeGridDay,listWeek'
            
            
            //end: 'today agendaweek, prev,next' // will normally be on the right. if RTL, will be on the left
            //    left: 'prev, next today',
            //     prev: 'previous',
            //     next: 'next',
            //     center: 'title',
            //     right: 'month, agendaweek, agendaday',
        },

        events: [
            {
                title: 'event2',
                start: '2025-05-05',
                end: '2025-05-07',
                color: 'green', // Light red
                textcolor: '#ddd',
                // color: '#ff9f89', // Light red
                // eventClassNames: [ 'myclassname', 'otherclassname' ]
                editable: false,
            },
            {
                title: 'event3',
                start: '2025-05-12T10:30:00',
                end: '2025-05-16T14:30:00',
                color: '#ff5733' // Light red
                // eventClassNames: ['bg-red-600']
                // color: '#ff9f89' // Light red
                // allDay: true // will make the time show
            }
        ],
        // editable: true
        //    eventColor: '#378006'
    });
    calendar.render();
});