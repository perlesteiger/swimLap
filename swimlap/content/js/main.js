$(document).ready ( function () {
   
    $("header span").find(".active").removeClass("active");
    
    $("#list_setting li").click( function() {
       var id = $(this).attr('class');
       
       $(".container").hide();
       $('#form_'+id).show();

    });
    
    $(".form_cancel").click( function() {
        
       $(".container").show();
       $('form').hide();

    });
});


