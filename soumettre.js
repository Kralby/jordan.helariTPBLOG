$(document).ready(function() 
{
	$("#formulaire").bind("submit", function()
	{

	var validation = true;

	if ($("#titre").val().length==0 ) {
		console.log("titre non rempli");
		$("#titre").css("border","2px solid red");
		validation = false;
	}/*
	else
		$("#titre").css("border","2px solid green");*/
	if ($("#texte").val().length==0 ) {
		console.log("texte non rempli");
		$("#texte").css("border","2px solid red");
		validation = false;
	}
	/*else
		$("#texte").css("border","2px solid green");*/

	if(validation==false)
		$("span").removeClass().html("Un des champs n'est pas remplis").addClass('alert alert-error');
		//$("#notif").slideDown('fast');
	return validation;
	});
	$('.cacher_notif').click(function(){$('#notif').slideUp('fast');});
	setTimeout(function(){$('#notif').hide()},20000);
});