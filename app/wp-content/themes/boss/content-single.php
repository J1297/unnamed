<?php
	
	$boss_postclass = get_post_class();
	if(has_post_thumbnail()){
		$boss_postclass[] = 'has-thumb';
	}
	
	if(is_sticky()){
		$boss_postclass[] = 'sticky';
	}
	
	print '
	<article class="'.implode(' ',$boss_postclass).'">';
					
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
			<h1 class="post-title">';												
				$boss_title = get_the_title();
				if(!empty($boss_title)){
					print $boss_title;
				}else{
					print __('Untitled','boss');
				}
			print '</h1>
			<div class="vspace"></div>';
			
		
		
			
		
			the_content();
			
			

			
			wp_link_pages( array( 'before' => '<div class="page-links">' . __( '<strong>Pages:</strong>', 'boss' ), 'after' => '</div>' ) ); 
		
		
		
		//tags						
			if(has_tag()){
				print '<p>&nbsp;</p>';
				
				print get_the_tag_list(sprintf( '<p class="tags"><i class="fa fa-tags"></i><b>%s:</b> ', __( 'Tags', 'boss' ) ), ', ', '</p>');				
				
			}
			
			
			
		//sharing
			if(get_post_format() != 'aside'){
				//thumb
				$boss_postthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
				
				$boss_post_sharing_facebook = get_theme_mod('dp_post_sharing_facebook');
				$boss_post_sharing_twitter = get_theme_mod('dp_post_sharing_twitter');
				$boss_post_sharing_gplus = get_theme_mod('dp_post_sharing_gplus');
				$boss_post_sharing_linkedin = get_theme_mod('dp_post_sharing_linkedin');
				$boss_post_sharing_pinterest = get_theme_mod('dp_post_sharing_pinterest');
				$boss_post_sharing_reddit = get_theme_mod('dp_post_sharing_reddit');
				$boss_post_sharing_digg = get_theme_mod('dp_post_sharing_digg');
				$boss_post_sharing_delicious = get_theme_mod('dp_post_sharing_delicious');
				$boss_post_sharing_stumble = get_theme_mod('dp_post_sharing_stumble');
				$boss_post_sharing_tumblr = get_theme_mod('dp_post_sharing_tumblr');
				$boss_post_sharing_email = get_theme_mod('dp_post_sharing_email');
				
				if($boss_post_sharing_facebook || $boss_post_sharing_twitter || $boss_post_sharing_gplus || $boss_post_sharing_linkedin || $boss_post_sharing_pinterest || $boss_post_sharing_reddit || $boss_post_sharing_digg || $boss_post_sharing_delicious || $boss_post_sharing_stumble || $boss_post_sharing_tumblr || $boss_post_sharing_email){						
						
					print '<div class="sharing">';
						
					$boss_curtitle = get_the_title();
					$boss_uri_parts = explode('?', $_SERVER['REQUEST_URI']);
						
					if($boss_post_sharing_facebook){
						print '<a href="https://www.facebook.com/sharer/sharer.php?u='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'&amp;t='.urlencode($boss_curtitle).'" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>';
					}
					if($boss_post_sharing_twitter){
						print '<a href="http://twitter.com/home?status='.urlencode($boss_curtitle).'%20'.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>';
					}
					if($boss_post_sharing_gplus){
						print '<a href="https://plus.google.com/share?url='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'" target="_blank" title="Google+"><i class="fa fa-google-plus"></i></a>';
					}
					if($boss_post_sharing_linkedin){
						print '<a href="http://linkedin.com/shareArticle?mini=true&amp;url='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'&amp;title='.urlencode($boss_curtitle).'" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a>';
					}
					if($boss_post_sharing_pinterest){
						print '<a href="http://pinterest.com/pin/create/button/?url='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'&amp;description='.urlencode($boss_curtitle);
							if(!empty($boss_postthumb[0])){
								print '&amp;media='.urlencode($boss_postthumb[0]);
							}
							print '" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a>';
					}
					if($boss_post_sharing_reddit){
						print '<a href="http://reddit.com/submit?url='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'&amp;title='.$boss_curtitle.'" target="_blank" title="Reddit"><i class="fa fa-reddit"></i></a>';
					}
					if($boss_post_sharing_digg){
						print '<a href="http://digg.com/submit?phase=2&amp;url='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'&amp;title='.$boss_curtitle.'" target="_blank" title="Digg"><i class="fa fa-digg"></i></a>';
					}
					if($boss_post_sharing_delicious){
						print '<a href="http://www.delicious.com/post?v=2&amp;url='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'&amp;notes=&amp;tags=&amp;title='.urlencode($boss_curtitle).'" target="_blank" title="Delicious"><i class="fa fa-delicious"></i></a>';
					}
					if($boss_post_sharing_stumble){
						print '<a href="http://www.stumbleupon.com/submit?url='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'&amp;title='.urlencode($boss_curtitle).'" target="_blank" title="Stumble Upon"><i class="fa fa-stumbleupon"></i></a>';		
					}
					if($boss_post_sharing_tumblr){
						print '<a href="http://www.tumblr.com/share/link?url='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'&amp;name='.urlencode($boss_curtitle).'" target="_blank" title="Tumblr"><i class="fa fa-tumblr"></i></a>';	
					}
					if($boss_post_sharing_email){
						print '<a href="mailto:?subject='.urlencode($boss_curtitle).'&amp;body='.urlencode('http://'.$_SERVER['HTTP_HOST']).urlencode($boss_uri_parts[0]).'" target="_blank" title="Email"><i class="fa fa-envelope-o"></i></a>';
					}	
				
					print '</div>';
				}
			
			}			
		
	
	print '		
	</article>	
	<div class="clear"></div>
	';
	
	
	
	//previous and next post
		if(get_post_format() != 'aside'){			
			print '<section class="prev-next-post">';
			
			print get_the_post_navigation(array(
				'prev_text' => '<i class="fa fa-angle-left"></i> <div class="text"><span>'.__('PREVIOUS','boss').'</span><br />%title</div>', 
				'next_text' => '<div class="text"><span>'.__('NEXT','boss').'</span><br />%title</div><i class="fa fa-angle-right"></i>'
			));
			
			
			print '
			</section>';
			
		}
	
	
?>	