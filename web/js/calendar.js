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

        eventResize: function(event) {
            console.log("Entrée dans : eventResize");
            var start1 = event.start.format("YYYY-MM-DD HH:mm:ss");
            var end1 = event.end.format("YYYY-MM-DD HH:mm:ss");
            var xhr = $.ajax({
                type: "POST",
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/resize',
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
            var start1 = event.start.format("YYYY-MM-DD HH:mm:ss");
            var end1 = event.end.format("YYYY-MM-DD HH:mm:ss");
            var xhr = $.ajax({
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/drop',
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
            var mywhen = starttime + ' - ' + endtime;
            $('#modalTitle').html(event.title);
            $('#modalWhen').text(mywhen);
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

    $('#form_chargeRecrutement').change(function () {
        var idUser = $(this).val();
        console.log(idUser);
        if($(this).val() != null)
        {
            $.ajax({
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/select/user',
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

    //$("#editModal").hide();

    $('#editButton').on('click',function () {
        var eventID = $('#eventID').val();
        //window.location.reload(true);
        $("#editModal").modal('show');
        console.log('Entrée modal:ok');
        console.log(eventID);

        $('#saveButton').on('click', function(e){
            var newTitle = $('.input_edit').val();
            console.log(newTitle);
            $.ajax({
                url: 'http://localhost/ligne_rh/web/app_dev.php/admin/accueil/calendar/edit/title',
                data: 'action=editTitle&id='+eventID+ '&new title=' + newTitle,
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


