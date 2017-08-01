/**
 * Created by PC on 31/07/2017.
 */
$(function () {
    $('#calendar-holder').fullCalendar({
        header: {
            left: 'prev, next',
            center: 'title',
            right: 'month, agendaWeek, agendaDay'
        },
        timezone: ('Europe/London'),
        businessHours: {
            start: '09:00',
            end: '17:30',
            dow: [1, 2, 3, 4, 5]
        },
        allDaySlot: false,
        defaultView: 'agendaWeek',
        lazyFetching: true,
        firstDay: 1,
        selectable: true,
        timeFormat: {
            agenda: 'h:mmt',
            '': 'h:mmt'
        },
        columnFormat:{
            month: 'ddd',
            week: 'ddd D/M',
            day: 'dddd'
        },
        editable: true,
        eventDurationEditable: true,
        eventSources: [
            {
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',
                type: 'POST',
                dataType: "json",
                data: {
                    filters: { param: fullCalendarEvent }
                },
                error: function() {
                    //alert()
                }
            }
        ],
    });
});
