$(function(){
	$('.mapBtn').click(function(){
	  $(this).next('.hideMapWrapper').fadeIn();
	});
	$('.closeMap,.hideMapWrapper').click(function(){
	  $('.hideMapWrapper').fadeOut();
	});
});

