
$(document).ready(function(){
    $("p").hide();
    $("#effacer").click(function(){
        $("*").hide();
    });

    $("#ecrire").click(function(){
        $("p").fadeIn();
    });
});
