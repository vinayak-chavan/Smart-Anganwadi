/*------------------------------------------------- Copy and Add Validation ---------------------------------------------*/
$(document).ready(function()
{
	$("#firstbutton").click(function() 
	{
		$("#secondbox").val($("#firstbox").val() );
	});
	
	$("#thirdbutton").click(function() 
	{
		$("#fourthbox").val($("#thirdbox").val() );
	});

	$("#copy").click(function() 
	{
      	$("#secondbox").val($("#firstbox").val() );
      	$("#fourthbox").val($("#thirdbox").val() );
	});

	$('#secondbutton').click(function(){
		var firstbox = $("#firstbox").val();
		var secondbox = $("#secondbox").val();
		
		$("#firstbox").val("");
		$("#secondbox").val("");

	});
	
	$("#fourthbutton").click(function(){
        var thirdbox = $("#thirdbox").val();
		var fourthbox = $("#fourthbox").val();

		$("#thirdbox").val("");
		$("#fourthbox").val("");

	});
	
	$("#clear").click(function() {
		
		$("#firstbox").val("");
		$("#secondbox").val("");
		$("#thirdbox").val("");
		$("#fourthbox").val("");
	});

	$('#fifthbutton').click(function() {
		$("#firstdiv").fadeToggle();
        $("#seconddiv").fadeToggle();
        $("#thirddiv").fadeToggle();
	});
	$("#save").click(function()
	{

		var text = $("#fifthbox").val();

        $("#message").html(text);
	});
});