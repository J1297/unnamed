<?php
/*
Template Name: Full Width Image, Auto Height
*/


get_header();

//check content and slider for styling calculations
		
		
	print '
	<div id="dp-fw-image">
		<div class="dp-loading"></div>
		';
		
		
		//load image	
		if(has_post_thumbnail(get_the_ID())){					
			the_post_thumbnail('full');
		}else{
			if ( current_user_can( 'publish_posts' ) ) {
				print '<div class="layer note"><p>'.__('Please set a featured image for this page to display an image here!<br />Try to keep its file size below 350kbyte for faster loading!','boss').'</p></div>';
			}
		}	

	print '</div><div class="clear"></div>';		


//display page content if has any
	
	if(!empty($post->post_content)){		
		print '
		<!-- PAGE START -->
		<section id="page" class="wrapper">
		';
	
			
		$boss_default_sidebar_position = get_theme_mod('dp_default_sidebar_position');
		$boss_widget_areas_sidebar = 'pages-widget-area';
				

		//sidebar on left
			if(!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar) && $boss_default_sidebar_position == 'left'){
				print '<section class="sidebar left widget-area">';
				get_sidebar();
				print '</section>';
			}			
		
		//page content
			if(!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar)){
				print '<section class="content with-sidebar">';
			}else{
				print '<section class="content">';
			}

				if (have_posts()) :
					print '<article class="entry-content">';
					while ( have_posts() ) : the_post();
					
						the_content();
						
						wp_link_pages( array( 'before' => '<div class="page-links">' . __( '<strong>Pages:</strong>', 'boss' ), 'after' => '</div>' ) ); 
					endwhile;
					print '</article>';
				endif;
			

			print '
				</section>
			';
	
		
		//sidebar on right
			if(!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar) && $boss_default_sidebar_position != 'left'){
				print '<section class="sidebar widget-area">';
				get_sidebar();
				print '</section>';
			}
					
					
			
		print '	
			<div class="clear"></div>
		</section>
		<!-- PAGE ENDS -->';
		
		
	}


get_footer();

?>