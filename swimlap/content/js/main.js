$(document).ready ( function () {
   
    $("header span").find(".active").removeClass("active");
    
    //changer le contenu des parametres
    $("#sous-menu-setting li").click( function() {
       var id = $(this).attr('class');

       $(".section").removeClass("put");
       $("form").hide();
       $('#section_'+id).addClass("put");
       //exception pour data
       if (id ==="data") $("#form_data").show();
    });
    
    //changer contenu des statistiques
    $("#sous-menu-stat li").click( function() {
       var id = $(this).attr('class');
       var swimmer = $('.search_swimmer').val();
       var meeting = $('.search_competition').val();
       var race = $('.search_race').val();
       var season = $('#param-season li.selected').attr('id');
       
        switch (id) {
            case 'repartition':
                createRepartition(swimmer,meeting,race,season);
                break;
            case 'performance':
                createPerformance(swimmer,meeting,race,season);
                break;
            case 'planification':
                createPlanification(swimmer,race,season);
                break;
        }

       $(".section").removeClass("put");
       $('#section_'+id).addClass("put");
    });
    
    //pour choix season
    $('#param-season li').click( function () {
        $("#param-season").find(".selected").removeClass("selected");
        $(this).addClass('selected'); 
    });
    
    //annulation
    $(".form_cancel").click( function() {
       var id = $(this).parents("form").children("input[type='hidden']").val();

       $('#section_'+id).addClass("put");
       $(this).parents("form").hide();
    });
    
    //bouton retour
    $(".section button").click( function() {
        var id = $(this).attr('name');
        
        $(this).parent().removeClass("put");
        $("#form_"+id).show();
    });
    
    //changer onglet actif
    $(".sous-menu li").click( function() {
        var id = $(this).attr('id');
        
        $(".sous-menu li").removeClass("active");
        $(this).addClass("active");
    }); 
    
    //pour import/export au passage souris
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
    
    //pour changement dans recherche
    $('.search_swimmer').change( function() {
       if ($(this).val() !== "")
           $('.search_type option:eq(0)').prop('selected', true);
    });
    //pour changement dans recherche
    $('.search_type').change( function() {
       if ($(this).val() !== "")
           $('.search_swimmer option:eq(0)').prop('selected', true);
    });
});

function createRepartition(nageur,compet,course,saison) {
    $.ajax({  
        //On utilise de l'ajax
        type: "POST",  //En post (envoi de données)
        url: '../../model/fonctions_request_stat.php', //On va chercher le fichier php
        data: "style=repartition&nageur="+nageur+"&compet="+compet+"&course="+course+"&saison="+saison, //On transmet les deux données pour l'exécution de la requête
        success: function(data) { 
            //Si le php renvoie quelque chose
            var tab=$.parseJSON(data);
            
            //creation div pour chaque nageur ou chaque course
            if (!tab)
                $('#pb-repartition').text("La recherche n'a pas abouti");
            else {
                $('#pb-repartition').text("");
                
                //remplissage des titres
                var swimmer = $('.search_swimmer option:selected').text();
                var meeting = $('.search_competition option:selected').text();
                var race = $('.search_type option:selected').text();
                
                $('#repartition-title').text(meeting);
                if (course === "")
                    $('#repartition-swim-race').text(swimmer);
                else if (nageur === "")
                    $('#repartition-swim-race').text(race);
            }
            //remplissage pour chaque div, plusieurs donut
            Morris.Donut({
                element: 'graph-repartition',
                data: [
                    {label: "Download Sales", value: 12},
                    {label: "In-Store Sales", value: 30},
                    {label: "Mail-Order Sales", value: 20}
                ]
            });
        }
    });
}
function createPerformance(nageur,compet,course,saison) {
    $.ajax({  
        //On utilise de l'ajax
        type: "POST",  //En post (envoi de données)
        url: '../../model/fonctions_request_stat.php', //On va chercher le fichier php
        data: "style=performance&nageur="+nageur+"&compet="+compet+"&course="+course+"&saison="+saison, //On transmet les deux données pour l'exécution de la requête
        success: function(data) { 
            //Si le php renvoie quelque chose
            var graph=$.parseJSON(data);
        }
    });
    
}
function createPlanification(nageur,course,saison) {
    $.ajax({  
        //On utilise de l'ajax
        type: "POST",  //En post (envoi de données)
        url: '../../model/fonctions_request_stat.php', //On va chercher le fichier php
        data: "style=planification&nageur="+nageur+"&course="+course+"&saison="+saison, //On transmet les deux données pour l'exécution de la requête
        success: function(data) { 
            //Si le php renvoie quelque chose
            var graph=$.parseJSON(data);
            
            //simple recuperation de donnees
            Morris.Bar({
                element: 'graph-planning',
                data: [
                  { y: '2006', a: 100, b: 90 },
                  { y: '2007', a: 75,  b: 65 },
                  { y: '2008', a: 50,  b: 40 },
                  { y: '2009', a: 75,  b: 65 },
                  { y: '2010', a: 50,  b: 40 },
                  { y: '2011', a: 75,  b: 65 },
                  { y: '2012', a: 100, b: 90 }
                ],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B']
              });
        }
    });
    
}


