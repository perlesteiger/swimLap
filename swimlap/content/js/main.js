$(document).ready ( function () {
   
    $("header span").find(".active").removeClass("active");
    
    //affichage/retour dans parametre
    $("#list_setting li").click( function() {
       var id = $(this).attr('class');
       
       $(".container").hide();
       $('#section_'+id).show();
    });
    $(".form_cancel").click( function() {
        
       $(".container").show();
       $('.section').hide();
       $(this).parents("form").hide();
    });
    $(".section button").click( function() {
        var id = $(this).attr('name');
        
        $(this).parent().hide();
        $("#form_"+id).show();
    });
    
    //affichage stat
    $("#sous-menu li").click( function() {
        var id = $(this).attr('id');
        
        //changement onglet actif
        $("#sous-menu li").removeClass("active");
        $(this).addClass("active");
        
        //changement contenu
//        $("section").hide();
//        $("section#stat-"+id).show();
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
    
    /*************autocompletion******************/
    function formatItem(row) {
        return row[0] + " " + row[1];
    }
    function formatResult(row) {
        return "";
    }

    //si retour attendu au clic
    $(".search_swimmer").result(function(event, data, formatted) {	
        if (data){
           //recuperation des data[1];
        }
    });
    $('.search_swimmer').autocomplete ('../model/recoverSwimmer_autocomplete.php', {
        max:50,
        width: 500,
        matchContains: true,
        formatItem: formatItem,
        formatResult: formatResult
    });
    
    //si retour attendu au clic
    $(".search_competition").result(function(event, data, formatted) {	
        if (data){
           //recuperation des data[1];
        }
    });
    $('.search_competition').autocomplete ('../model/recoverCompetition_autocomplete.php', {
        max:50,
        width: 500,
        matchContains: true,
        formatItem: formatItem,
        formatResult: formatResult
    });
    /******************************************************/
});


