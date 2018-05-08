<?php

get_header();


	print '
	<!-- PAGE START -->
	<section id="page" class="wrapper">
	';
	

	$boss_widget_areas_sidebar = 'archives-widget-area';	
		
	//page content
		if(!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar)){
			print '<section class="content blog with-sidebar">';
		}else{
			print '<section class="content blog">';
		}

		
	//title
		if(is_category()){
			print '<h1 class="archive-title deco-side">'.__('CATEGORY','boss').' / '.single_cat_title('',false).'</h1>';
		}elseif(is_tag()){
			print '<h1 class="archive-title deco-side">'.__('TAGGED POSTS','boss').' / '.single_tag_title('',false).'</h1>';
		}elseif(is_date()){
			print '<h1 class="archive-title deco-side">'.__('ARCHIVE','boss').'</h1>';
		}elseif(is_author()){
			print '<h1 class="archive-title deco-side">'.__('AUTHOR ARCHIVES','boss').'</h1>';
		}
		
		
		if(have_posts()){
			while(have_posts()){
				the_post();
			
				get_template_part('content-blog');
		
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