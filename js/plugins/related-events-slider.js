// JavaScript Document

$(document).ready(function() {
              $('.related-events').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              });
			  var prev = $('.related-events .owl-controls .owl-nav .owl-prev');
			  var next = $('.related-events .owl-controls .owl-nav .owl-next');
			  
			  prev.text('<').addClass('owl-nav');
			  next.text('>').addClass('owl-nav');
			  
			  
            });