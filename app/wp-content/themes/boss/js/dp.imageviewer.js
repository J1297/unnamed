jQuery(document).ready(function($) {		
	"use strict";		
	
	var curri = 0;
	var galimgs = new Array();
	
	
	//custom photo viewer
		$('.dp-imageviewer,a.dp-image').click(function(e){
			e.preventDefault();
			
			$('#dp-pv-next,#dp-pv-prev').css('display','none');
			
			var imgurl = $(this).attr('href');
			
			$('#dp-photo-viewer').fadeIn(600,function(){
				$('#dp-pv-img').css('background-image','url('+imgurl+')');
			});		
		});
		
		$('img.dp-image').click(function(e){
			e.preventDefault();
			
			$('#dp-pv-next,#dp-pv-prev').css('display','none');
			
			var imgurl = $(this).closest('a').attr('href');
			
			$('#dp-photo-viewer').fadeIn(600,function(){
				$('#dp-pv-img').css('background-image','url('+imgurl+')');
			});		
		});
		
		$('.gallery-item a').click(function(e){
			e.preventDefault();
			
			$('#dp-pv-next,#dp-pv-prev').css('display','block');
			
			var currimg = $(this).attr('href');			
			
			//put all image urls to array
			var galdiv = $(this).closest('.gallery');
			
			
			var actr = 0;
			$('.gallery-item a',galdiv).each(function(){
				if($(this).attr('href') == currimg){
					curri = actr;
				}
				galimgs.push($(this).attr('href'));
				actr++;
			});
						
			
			//open viewer
			$('#dp-photo-viewer').fadeIn(600,function(){
				$('#dp-pv-img').css('background-image','url('+currimg+')');
			});	
		});
		
	//close	
		$('#dp-pv-close').click(function(){
			$('#dp-photo-viewer').fadeOut(100,function(){
				$('#dp-pv-img').css('background-image','none');
			});			
		});
		$(document).keyup(function(e) {
			if(e.keyCode == 27){ 
				$('#dp-photo-viewer').fadeOut(100,function(){
					$('#dp-pv-img').css('background-image','none');
				});	
			} 
		});
		
		
	//next
		$('#dp-pv-next').click(function(){
			var nexti = curri + 1;
			if(galimgs[nexti]){
				$('#dp-pv-img').css('background-image','none');
				$('#dp-pv-img').css('background-image','url('+galimgs[nexti]+')');
				curri = nexti;
			}			
		});
		$(document).keyup(function(e) {
			if(e.keyCode == 39){ 
				var nexti = curri + 1;
				if(galimgs[nexti]){
					$('#dp-pv-img').css('background-image','none');
					$('#dp-pv-img').css('background-image','url('+galimgs[nexti]+')');
					curri = nexti;
				}
			} 
		});
	
		
	//prev
		$('#dp-pv-prev').click(function(){
			var previ = curri - 1;
			if(galimgs[previ]){
				$('#dp-pv-img').css('background-image','none');
				$('#dp-pv-img').css('background-image','url('+galimgs[previ]+')');
				curri = previ;
			}			
		});
		$(document).keyup(function(e) {
			if(e.keyCode == 37){ 
				var previ = curri - 1;
				if(galimgs[previ]){
					$('#dp-pv-img').css('background-image','none');
					$('#dp-pv-img').css('background-image','url('+galimgs[previ]+')');
					curri = previ;
				}	
			} 
		});
		
		
});