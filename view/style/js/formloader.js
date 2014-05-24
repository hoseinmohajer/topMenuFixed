$(document).ready(function () {
	$('#subscription').click( function() {
		
        // var toggleWidth = $("#usr_form").width() == 300 ? "0px" : "300px";
        // $('#usr_form').animate({ width: toggleWidth });
        
        var toggleheight = $("#usr_form").height() == 67 ? "0px" : "67px";
        $('#usr_form').animate({ height: toggleheight });
        
        if($("#usr_form").height() != 67){
        	$("#usr_form").css("padding-top", "5px");
        }else{
        	$("#usr_form").animate({"padding-top": "0px"});
        }

        $("#usrform").fadeToggle("show");
        $("#userform").fadeToggle("show");
    });
});