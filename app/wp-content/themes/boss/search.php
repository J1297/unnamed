<?php

get_header();


	print '
	<!-- PAGE START -->
	<section id="page" class="wrapper">
	';


	$boss_widget_areas_sidebar = 'search-widget-area';				
			
	
	
	//page content
		if(!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar)){
			print '<section class="content with-sidebar blog">';
		}else{
			print '<section class="content blog">';
		}
	
			
		
		//main title
			print '<h1 class="deco-side">'.__('SEARCH RESULTS','boss').'</h1>
			
			<p>'.__('Search results are listed below for keyword:','boss').' <b>'.get_search_query().'</b></p>
			<div class="vspace"></div>';
		
		
		if(have_posts()){
			while(have_posts()){
				the_post();
			
				get_template_part('content-search');
		
			}
		}
		
		
	
	//pagination
		if(function_exists('wp_paginate')) {					
			wp_paginate();		
		} 
		else{
			//display default next/prev links
			
			if($wp_query->max_num_pages > 1 ){								
				print '<hr />';
				
				print '<p class="pages-left">'; previous_posts_link(__('<i class="fa fa-angle-left"></i>&nbsp; Previous Page ','boss')); print '</p>';
				
					print '<p class="pages-number">- ';
						$boss_page_curr = (get_query_var('paged')) ? get_query_var('paged') : 1;								
						print sprintf(__('PAGE %d OF %d','boss'),$boss_page_curr,$wp_query->max_num_pages);
					print ' -</p>';
					
					
					print '<p class="pages-right">'; next_posts_link(__('Next Page &nbsp;<i class="fa fa-angle-right"></i>','boss'),$wp_query->max_num_pages); print '</p>';				
				
			}
		}			
		
			
			
		print '
			</section>
		';
	
	//sidebar
		if(!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar)){
			print '<section class="sidebar widget-area">';
			get_sidebar();
			print '</section>';
		}
			
		print '<div class="clear"></div>';
	
	
	
	print '
	</section>
	<!-- PAGE ENDS -->';
	

get_footer();

?>