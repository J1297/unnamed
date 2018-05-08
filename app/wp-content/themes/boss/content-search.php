<?php

	print '
	<article>';
			
			

			
			
		//title
			print '
			<h4><a href="'.get_permalink().'">';												
				$boss_title = get_the_title();
				if(!empty($boss_title)){
					print $boss_title;
				}else{
					print __('Untitled','boss');
				}
			print '</a></h4>';
			

		//post info			
			if(get_post_type() != 'page'){						
				print '<p class="search-info">';				
				print get_the_date().'&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;';
				print get_the_category_list( __( ', ', 'boss' ) );				
				print '</p>';
			}
			
		//excerpt			
			if(get_post_type() != 'page' && has_excerpt()){
				print get_the_excerpt();
			}
				
	
	print '
	</article>	
	';
	
	
	
?>	