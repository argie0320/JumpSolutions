$( document ).ready(function() {
			$('#cssmenu').prepend('<div id="menu-button"> <a href="index.php?"><img src="images/logo.png" width="75" height="22" ></a></div>');
				$('#cssmenu #menu-button').on('click', function(){
			
				var menu = $(this).next('ul');
			
				if (menu.hasClass('open')) {
					menu.removeClass('open');
				}else {
					menu.addClass('open');
				}
				
			});
			
			
});