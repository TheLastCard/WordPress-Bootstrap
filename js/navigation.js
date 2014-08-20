
$(function(){

	//Marks correct link in main menu as active (with the class "active") based on href of the page vs the links
	$('.menu-item').each(function(){
		var navPages = $(this).find('a').attr('href');
		if(window.location.href === navPages){
			$(this).addClass('active');
		}
	});

	$('.menu-item').on('click', function(){
		$('.menu-item').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
	});
});