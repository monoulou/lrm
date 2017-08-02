/**
 * Created by PC on 31/07/2017.
 */
// $( document ).ready(function() {
//     $(function () {
//         $('#calendar-holder').fullCalendar({
//             header: {
//                 left: 'prev, next',
//                 center: 'title',
//                 right: 'month, agendaWeek, agendaDay'
//             },
//             timezone: ('Europe/London'),
//             businessHours: {
//                 start: '09:00',
//                 end: '17:30',
//                 dow: [1, 2, 3, 4, 5]
//             },
//             allDaySlot: false,
//             defaultView: 'agendaWeek',
//             lazyFetching: true,
//             firstDay: 1,
//             selectable: true,
//             timeFormat: {
//                 agenda: 'h:mmt',
//                 '': 'h:mmt'
//             },
//             columnFormat:{
//                 month: 'ddd',
//                 week: 'ddd D/M',
//                 day: 'dddd'
//             },
//             editable: true,
//             eventDurationEditable: true,
//             eventSources: [
//                     $.ajax({
//                         url:'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',
//                         type: 'POST',
//                         dataType: 'json',
//                         success: function (data) {
//                             console.log(data);
//                             if(data.success){
//                                 var events = [];
//                                 $.each(data.events, function (index, value) {
//                                     events.push({
//                                         title: value.title,
//                                         start: moment(value.start_date).format('YYYY-MM-DD'),
//                                         end : moment(value.end_date).format('YYYY-MM-DD')
//                                     });
//                                 });
//                                 console.log(events);
//                                 calendar.fullCalendar( 'addEventSource', events);
//                             }
//                         }
//                     })
//             ]
//         });
//     });
// });

$(document).ready(function(){
    var calendar = $('#calendar').fullCalendar({
        header:{
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultView: 'agendaWeek',
        editable: true,
        selectable: true,
        allDaySlot: false,

        //events: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',
        event: [
                    $.ajax({
                        url:'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',
                        type: 'POST',
                        dataType: 'json',
                        success: function (data) {
                            //console.log(data);
                            if(data.success){
                                var events = [];
                                $.each(data.events, function (index, value) {
                                    events.push({
                                        title: value.title,
                                        start: moment(value.start_date).format('YYYY-MM-DD'),
                                        end : moment(value.end_date).format('YYYY-MM-DD')
                                    });
                                });
                                console.log(events);
                               calendar.fullCalendar( 'addEventSource', events, true);
                                console.log(events.title);
                            }
                        }
                    })
            ],


        eventClick:  function(event, jsEvent, view) {
            endtime = $.fullCalendar.moment(event.end).format('h:mm');
            starttime = $.fullCalendar.moment(event.start).format('dddd, MMMM Do YYYY, h:mm');
            var mywhen = starttime + ' - ' + endtime;
            $('#modalTitle').html(event.title);
            $('#modalWhen').text(mywhen);
            $('#eventID').val(event.id);
            $('#calendarModal').modal();
        },

        //header and other values
        select: function(start, end, jsEvent) {
            endtime = $.fullCalendar.moment(end).format('h:mm');
            starttime = $.fullCalendar.moment(start).format('dddd, MMMM Do YYYY, h:mm');
            var mywhen = starttime + ' - ' + endtime;
            start = moment(start).format();
            end = moment(end).format();
            $('#createEventModal #startTime').val(start);
            $('#createEventModal #endTime').val(end);
            $('#createEventModal #when').text(mywhen);
            $('#createEventModal').modal('toggle');
        },
        eventDrop: function(event, delta){
            $.ajax({
                //url: 'index.php',
                //data: 'action=update&title='+event.title+'&start='+moment(event.start).format()+'&end='+moment(event.end).format()+'&id='+event.id ,
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',
                type: "POST",
                success: function(json) {
                    //alert(json);
                }
            });
        },
        eventResize: function(event) {
            $.ajax({
                url: 'index.php',
                //data: 'action=update&title='+event.title+'&start='+moment(event.start).format()+'&end='+moment(event.end).format()+'&id='+event.id,
                data: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',
                type: "POST",
                success: function(json) {
                    //alert(json);
                }
            });
        }
    });

    $('#submitButton').on('click', function(e){
        // We don't want this to act as a link so cancel the link action
        e.preventDefault();
        doSubmit();
    });

    $('#deleteButton').on('click', function(e){
        // We don't want this to act as a link so cancel the link action
        e.preventDefault();
        doDelete();
    });

    function doDelete(){
        $("#calendarModal").modal('hide');
        var eventID = $('#eventID').val();
        $.ajax({
            url: 'index.php',
            //data: 'action=delete&id='+eventID,
            data: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',
            type: "POST",
            success: function(json) {
                if(json == 1)
                    $("#calendar").fullCalendar('removeEvents',eventID);
                else
                    return false;


            }
        });
    }
    function doSubmit(){
        $("#createEventModal").modal('hide');
        var title = $('#title').val();
        var startTime = $('#startTime').val();
        var endTime = $('#endTime').val();

        $.ajax({
            url: 'index.php',
            //data: 'action=add&title='+title+'&start='+startTime+'&end='+endTime,
            data: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar',
            type: "POST",
            success: function(json) {
                $("#calendar").fullCalendar('renderEvent',
                    {
                        id: json.id,
                        title: title,
                        start: startTime,
                        end: endTime,
                    },
                    true);
            }
        });

    }
});

