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
        //events: 'http://localhost/ligne_rh/web/admin/accueil/calendar',
        //events: 'https://lrm.alwaysdata.net/admin/accueil/calendar',

        eventResize: function(event) {
            console.log("Entrée dans : eventResize");
            var start1 = event.start.format("YYYY-MM-DD HH:mm:ss");
            var end1 = event.end.format("YYYY-MM-DD HH:mm:ss");
            var xhr = $.ajax({
                type: "POST",
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/resize',
                //url: 'http://localhost/ligne_rh/web/admin/accueil/calendar/resize',
                //url: 'https://lrm.alwaysdata.net/admin/accueil/calendar/resize',
                data: 'action=update&title=' + event.title + '&start=' + start1 + '&end=' + end1 + '&id=' + event.id,
                success: function(data) {
                    console.log(data);
                    window.location.reload(true);
                },
                error: function() {
                    alert("erreur lors de l'appel de l'url dans POST event/resize : contactez l'administrateur du site");
                },
            });
        },



        eventDrop: function(event){
            console.log("Entrée dans : eventDrop");
            console.log(event);
            var start1 = event.start.format("YYYY-MM-DD HH:mm:ss");
            var end1 = event.end.format("YYYY-MM-DD HH:mm:ss");

            var xhr = $.ajax({
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/drop',
                //url: 'http://localhost/ligne_rh/web/admin/accueil/calendar/drop',
                //url: 'https://lrm.alwaysdata.net/admin/accueil/calendar/drop',
                data: 'action=update&title=' + event.title+'&start=' + start1 +'&end=' + end1 + '&id=' + event.id ,
                type: "POST",
                success: function(data) {
                    console.log(data);
                    window.location.reload(true);
                    //alert(json);
                },
                error: function() {
                    alert("erreur lors de l'appel de l'url dans POST event/drop : contactez l'administrateur du site");
                },
            });
        },

        eventClick:  function(event, jsEvent, view) {
            endtime = $.fullCalendar.moment(event.end).format('H:mm');
            starttime = $.fullCalendar.moment(event.start).format('dddd, Do MMMM  YYYY, H:mm');
            isAllDay = $.fullCalendar.moment(event.start).format('dddd, Do MMMM  YYYY');

            var mywhen = starttime + ' - ' + endtime;
            console.log(event);
            console.log(event.commentaire);
            $('#modalTitle').html(event.title);
            if(event.allDay == true) {
                $('#modalWhen').text(isAllDay);
            }else {
                $('#modalWhen').text(mywhen);
            }
            $('#modalComm').text(event.commentaire);
            $('#eventID').val(event.id);
            $('#calendarModal').modal();
        },

    });

    $('#deleteButton').on('click', function(e){
        // We don't want this to act as a link so cancel the link action
        confirm('Souhaitez-vous réellement supprimer cet événement?');
        e.preventDefault();
        doDelete();
    });

    function doDelete(){
        $("#calendarModal").modal('hide');
        var eventID = $('#eventID').val();
        $.ajax({
            url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/delete',
            //url: 'http://localhost/ligne_rh/web/admin/accueil/calendar/delete',
            //url: 'https://lrm.alwaysdata.net/admin/accueil/calendar/delete',
            data: 'action=delete&id='+eventID,
            type: "POST",
            success: function(json) {
                if(json == 1){
                    $("#calendar").fullCalendar('removeEvents',eventID);
                } else{
                    return false;
                }
            }
        });
        $(document).ajaxStop(function(){
            window.location.reload();
        });
    }

    //Selection d'un autre utilisateur pour visualisation d'un autre planning
    $('#form_chargeRecrutement').change(function () {
        var idUser = $(this).val();
        console.log(idUser);
        if($(this).val() != null)
        {
            $.ajax({
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/select/user',
                //url: 'http://localhost/ligne_rh/web/admin/accueil/calendar/select/user',
                //url: 'https://lrm.alwaysdata.net/admin/accueil/calendar/select/user',
                data: 'action=selectUser&id='+idUser,
                type: "POST",
                //dataType : 'json'
                success: function(data) {
                    console.log(data);
                    window.location.reload(true);
                    //alert(json);
                },
            });
        }
    });

    //Editer un evenement
    $('#editButton').on('click',function () {
        var eventID = $('#eventID').val();
        //window.location.reload(true);
        $("#editModal").modal('show');
        console.log('Entrée modal:ok');
        console.log(eventID);

        $('#saveButton').on('click', function(e){
            var newTitle = $('.input_edit_title').val();
            var newComm = $('.input_edit_comm').val();
            console.log(newTitle);
            $.ajax({
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/edit/title',
                //url: 'http://localhost/ligne_rh/web/admin/accueil/calendar/edit/title',
                //url: 'https://lrm.alwaysdata.net/admin/accueil/calendar/edit/title',
                data: 'action=editTitle&id='+eventID+ '&new title=' + newTitle+ '&new comm=' + newComm,
                type: "POST",
                //dataType : 'json'
                success: function(data) {
                    console.log(data);
                    window.location.reload(true);
                    //alert(json);
                },
            });
        });
    });
    
});


