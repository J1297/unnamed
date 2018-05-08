<?php
/*
Template Name: Page without Sidebar
*/


get_header();



	//featured image			
		if(has_post_thumbnail(get_the_ID())){
			$boss_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
			print '<div class="featured-image" style="background-image:url(\''.$boss_src[0].'\')"></div>';
		}
			


	print '
	<!-- PAGE START -->
	<section id="page" class="wrapper">
		<section class="content">';
		

			if (have_posts()) :
				print '<article class="entry-content">';
				while ( have_posts() ) : the_post();
				
					the_content();
					
					wp_link_pages( array( 'before' => '<div class="page-links">' . __( '<strong>Pages:</strong>', 'boss' ), 'after' => '</div>' ) ); 
				endwhile;
				print '</article>';
			endif;

			
			
			if(comments_open()){
			
				print '
				
				<hr />
					
				<!-- COMMENTS -->							
				
				<section id="comments">';
			
					comments_template( '', true );
						
				print '
				</section>';
			
			}														
			
		print '
			</section>
		
		<div class="clear"></div>
		
	</section>
	<!-- PAGE ENDS -->';
	
	
get_footer();

?>