$(document).ready(function(){
	$('.artist').click(function(e){
		$(this).addClass('open');
	});
	$('.artist .close').click(function(e){
		e.stopPropagation();
		$(this).parents('.artist').removeClass('open');
	});
})