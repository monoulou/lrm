/**
 * Created by PC on 31/07/2017.
 */


$(document).ready(function() {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev, next',
            center: 'title',
            right: 'month, agendaWeek, agendaDay'
        },
        timezone: ('Europe/London'),
        businessHours: {
            start: '09:00',
            end: '18:30',
            dow: [1, 2, 3, 4, 5]
        },
        allDaySlot: true,
        defaultView: 'agendaWeek',
        lazyFetching: true,
        firstDay: 1,
        selectable: true,
        /*timeFormat: {
            agenda: 'h:mmt',
            '': 'h:mmt'
        },*/
        editable: true,
        eventDurationEditable: true,
        events: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',

        

        //header and other values
       /* select: function(start, end, jsEvent) {
            endtime = $.fullCalendar.moment(end).format('h:mm');
            starttime = $.fullCalendar.moment(start).format('dddd, MMMM Do YYYY, h:mm');
            var mywhen = starttime + ' - ' + endtime;
            start = moment(start).format();
            end = moment(end).format();
            $('#createEventModal #startTime').val(start);
            $('#createEventModal #endTime').val(end);
            $('#createEventModal #when').text(mywhen);
            $('#createEventModal').modal('toggle');
        },*/
        
        

    });
});


