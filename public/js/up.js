$(document).ready(function(){
 
	$('.btn-dark-gray-up').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 600);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.btn-dark-gray-up').fadeIn(300);
		} else {
			$('.btn-dark-gray-up').fadeOut(300);
		}
	});

});