<?php
	
	$boss_postclass = get_post_class();
	if(has_post_thumbnail()){
		$boss_postclass[] = 'has-thumb';
	}
	
	if(is_sticky()){
		$boss_postclass[] = 'sticky';
	}
	
	
	$post_ID = get_the_ID(); //+id="post-'. $post_ID.'" added
	
	print '
	<section id="post-'. $post_ID.'" class="'.implode(' ',$boss_postclass).'">';
			
	
			
			
			
		//date
			print '				
			<div class="post-date">'.get_the_date('d').'<span>'.get_the_date('M').'</span><br />
				<div class="year">'.get_the_date('Y').'</div>
			</div>
			';
			
		print '					
			<div class="post-info">';
			
			//sticky
				if(is_sticky()){
					print '<i class="fa fa-thumb-tack"></i> '.__('Sticky','boss').'&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;';
				}
			
			//info			
				print '<i class="fa fa-user"></i> '.get_the_author().'&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;';
				print '<i class="fa fa-bookmark"></i> '.get_the_category_list( __( ', ', 'boss' ) ).'&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;';
				print '<i class="fa fa-comments"></i> '; comments_number( __('0 comment','boss'), __('1 comment','boss'), __('% comments','boss') );			
			
			print '
			</div>';
				
			
			//title
			print '
			<h3 class="post-title"><a href="'.get_permalink().'">';												
				$boss_title = get_the_title();
				if(!empty($boss_title)){
					print $boss_title;
				}else{
					print __('Untitled','boss');
				}
			print '</a></h3>';
			
			
			//featured image
			if(has_post_thumbnail() && !has_excerpt()){
				the_post_thumbnail('large');
			}
			
			
			//content
			print '<article class="post-content">';
			
			
			if(has_excerpt()){
				the_excerpt();
			}else{
				the_content();
			}
			print '</article>';
			
			

			
			wp_link_pages( array( 'before' => '<div class="page-links">' . __( '<strong>Pages:</strong>', 'boss' ), 'after' => '</div>' ) ); 
		
				
	
	print '
	</section>	
	';
	
	
	
?>	