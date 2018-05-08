//REMOVE LOADING
	(function($) {
		$(window).load(function() {
			
			$('.dp-loading').fadeOut(1000,function(){
				$(this).remove();
			});
		});
		
		
	})(jQuery);
	


jQuery(document).ready(function($) {		
	"use strict";		
	
	//SEARCH	
		$(document).on('click','.header .menu-search',function(){
			$('.header .search').toggle();
		});
		
	
		
	//RESPONSIVE MENU
		var responsiveMenu = 'closed';		
		$(document).on('click','#responsive-menu',function(){
			if(responsiveMenu == 'closed'){
				$('i',this).removeClass('fa-bars').addClass('fa-times');
				$('#respo-menu-holder').slideToggle();
				$('.content, #dp-fw-slider, .footer-widgets, footer').css('opacity','0.2');
				responsiveMenu = 'opened';			
			}else{
				$('i',this).removeClass('fa-times').addClass('fa-bars');
				$('#respo-menu-holder').slideToggle();
				$('.content, #dp-fw-slider, .footer-widgets, footer').css('opacity','1');				
				responsiveMenu = 'closed';
			}
		});
		
	
	
	//HEADING DECO
		$('.content h6 + h1, .content h5 + h1, .content h4 + h1, .content h3 + h1, .content h2 + h1').each(function(){			
			if( $(this).css('text-align') == 'center'){
				$(this).prev().prepend('<span class="deco"></span>');
			}else{
				$(this).addClass('deco-side').prev().addClass('deco-side');
			}
		});
		
		if($('.dp-posts h3').length > 0){
			$('.dp-posts h3').prepend('<span class="deco"></span>');
		}
		
	
	//CALL TO ACTION SHORTCODE STYLING
		if($('.dp-cta.has-bg').length > 0){
			var dpctah = parseInt($('.dp-cta.has-bg').css('height'));			
			$('.dp-cta.has-bg').addClass('dp-cta-js').after('<div class="dp-cta-fixer" style="height:'+dpctah+'px;"></div>');
		}
		
				
		
});