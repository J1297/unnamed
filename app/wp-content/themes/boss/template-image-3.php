<?php
/*
Template Name: Full Width Image, Auto Height, No sidebar
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
	
			
				
		
		//page content
			
			print '<section class="content">';
			

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
	
							
					
			
		print '	
			<div class="clear"></div>
		</section>
		<!-- PAGE ENDS -->';
		
		
	}


get_footer();

?>