$(document).ready ( function () {
   
    $("header span").find(".active").removeClass("active");
    
    //affichage/retour dans parametre
    $("#list_setting li").click( function() {
       var id = $(this).attr('class');
       
       $(".container").hide();
       $('#form_'+id).show();
    });
    $(".form_cancel").click( function() {
        
       $(".container").show();
       $('form').hide();
    });
    
    //affichage stat
    $("#sous-menu li").click( function() {
        var id = $(this).attr('id');
        
        //changement onglet actif
        $("#sous-menu li").removeClass("active");
        $(this).addClass("active");
        
        //changement contenu
        $("section").hide();
        $("section#stat-"+id).show();
    }); 
    
    $("#data_import").mousemove( function() {
       
        $("#import button").css( {
            'background-color': '#D4DADC',
            'color': '#212121'
        });
    });
    $("#data_import").mouseout( function() {
       
        $("#import button").css( {
            'background-color': '#046675',
            'color': '#FFF'
        });
    });
    
    $('#distribution_swimmer').autocomplete({
        source : 'recoverSwimmer_autocomplete.php'
    });
    
    $('#distribution_competition').autocomplete({
        source : 'recoverCompetition_autocomplete.php'
    });
});


