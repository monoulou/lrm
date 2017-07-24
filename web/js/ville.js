/**
 * Created by mohamed.abdelmoumen on 07/07/2017.
 */
    /* Autocomplete cp - ville - departement*/
    $( document ).ready(function() {
        $(".cp").keyup(function() {
            if($(this).val().length === 5){
                $.ajax({
                    type: 'get',
                    url:'http://localhost/ligne_rh/web/app_dev.php/admin/client/new/ville/' + $(this).val(),
                    beforeSend: function () {
                    },
                    success: function (data) {
                       $(".ville").val(data.ville);
                        $(".departement").val(data.departement);
                        $(".pays").val(data.pays);
                    }
                });
            }else{

            }
        });

    /* Affichage de l'input partenaire*/
    $(".typeClient").change(function()
    {
        if($(this).val() == "Client")
        {
            $(".partenaire").show();
        }
        else
        {
            $(".partenaire").hide();
        }
    });
    $(".partenaire").hide();


        // /* Autocomplete les villes*/
        // $(".nomVille").keyup(function () {
        //     if($(this).val != null){
        //         $.ajax({
        //             type: 'get',
        //             url:'http://localhost/ligne_rh/web/app_dev.php/admin/emploi/new/ville/' + $(this).val(),
        //             beforeSend: function () {
        //             },
        //             success: function (data) {
        //                 for(var i in data) {
        //                     console.log(data[i]);
        //                     $(".nomVille").val(data[i]);
        //                 }
        //
        //             }
        //          });
        //      }else{
        //
        //      }
        //  });

        //$(".nomVille").chosen({disable_search_threshold: 10})


});

