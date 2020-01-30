$document().ready(function(){

$("#puretomuayad").load($('.picklink:first').attr("href"));
$('.picklink').click(function(){
	var pick =$(this).attr("href");
	$("#puretomuayad").hide().load(pick).fadeIn();
return false;
});