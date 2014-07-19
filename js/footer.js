// JavaScript Document
$(document).ready(function(e) {
                
				var winH = $(window).height();
				var footer = $('#footer');
				var container = $('#wapper').height();
				
				if(container < winH){
					console.log('container is less than');
					footer.css({ 'position': 'absolute', 'bottom':'0px'});
				}
				
				
});