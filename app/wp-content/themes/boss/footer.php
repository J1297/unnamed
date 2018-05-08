<?php




//footer widget areas
//check if there is a footer widget setting for this particular page
	
	$boss_footer_widget_areas = Array();

	
	//footer area 1	
		if(is_active_sidebar('widget-area-one')){
			$boss_footer_widget_areas[] = 'widget-area-one';
		}
		
	//footer area 2	
		if(is_active_sidebar('widget-area-two')){
			$boss_footer_widget_areas[] = 'widget-area-two';
		}
		
	//footer area 3
		if(is_active_sidebar('widget-area-three')){
			$boss_footer_widget_areas[] = 'widget-area-three';
		}
		
	//footer area 4
		if(is_active_sidebar('widget-area-four')){
			$boss_footer_widget_areas[] = 'widget-area-four';
		}
		
		
		
		
	if(!empty($boss_footer_widget_areas) && !is_page_template('template-image.php')){
		$boss_num_of_fa = count($boss_footer_widget_areas);		
		if($boss_num_of_fa == '4'){
			$boss_fa_class = 'one-fourth';
		}elseif($boss_num_of_fa == '3'){
			$boss_fa_class = 'one-third';
		}elseif($boss_num_of_fa == '2'){
			$boss_fa_class = 'one-half';
		}else{
			$boss_fa_class = '';
		}
	
	
		print '
		<section class="footer-widgets">
			<div class="wrapper">
		';
		
			$boss_fawctr = '0';
			foreach($boss_footer_widget_areas as $boss_fwa){
				$boss_fawctr++;
				if($boss_fawctr == $boss_num_of_fa){
					print '<div class="widget-area '.$boss_fa_class.' last">';
				}else{
					print '<div class="widget-area '.$boss_fa_class.'">';
				}
				
				dynamic_sidebar( $boss_fwa );
				
				print '</div>';
			}
	
		print '</div>
		</section>
		';
	}
		
		

		
//footer	
	$boss_footer_icons_behance = get_theme_mod('dp_footer_icons_behance');
	$boss_footer_icons_dribbble = get_theme_mod('dp_footer_icons_dribbble');
	$boss_footer_icons_facebook = get_theme_mod('dp_footer_icons_facebook');
	$boss_footer_icons_gplus = get_theme_mod('dp_footer_icons_gplus');
	$boss_footer_icons_instagram = get_theme_mod('dp_footer_icons_instagram');
	$boss_footer_icons_linkedin = get_theme_mod('dp_footer_icons_linkedin');
	$boss_footer_icons_pinterest = get_theme_mod('dp_footer_icons_pinterest');
	$boss_footer_icons_rss = get_theme_mod('dp_footer_icons_rss');
	$boss_footer_icons_twitter = get_theme_mod('dp_footer_icons_twitter');
	$boss_footer_icons_email = get_theme_mod('dp_footer_icons_email');
	
	
	
		print '
		<!-- FOOTER -->	
		<footer>	
			<section class="wrapper">
		
			<div class="footer-left">';					
				
				if(has_nav_menu('footer')){
					$boss_footer_menu = wp_nav_menu( array( 							
						'container' => 'ul',		
						'theme_location' => 'footer',
						'menu_id' => 'footer-menu',
						'depth' => '1',
						'after' => '<li class="li-sep">&nbsp;|&nbsp;'
					)); 				
					
					print str_replace('</li><li>','</li></li>',$boss_footer_menu);
					
				}
					
				
				print '<p class="copyright">'.__('A WORDPRESS THEME BY ','boss').' <a href="http://divpusher.com" target="_blank">DIVPUSHER</a></p>';
				
				
			print '</div>';
			
		
		
			if(!empty($boss_footer_icons_behance) || !empty($boss_footer_icons_dribbble) || !empty($boss_footer_icons_facebook) || !empty($boss_footer_icons_gplus) || !empty($boss_footer_icons_instagram) || !empty($boss_footer_icons_linkedin) || !empty($boss_footer_icons_pinterest) || !empty($boss_footer_icons_rss) || !empty($boss_footer_icons_twitter) || !empty($boss_footer_icons_email)){
				print '<div class="footer-right">';
				
				if(!empty($boss_footer_icons_behance)){ print '<a href="'.esc_url($boss_footer_icons_behance).'"><i class="fa fa-facebook"></i></a>'; }
				if(!empty($boss_footer_icons_dribbble)){ print '<a href="'.esc_url($boss_footer_icons_dribbble).'"><i class="fa fa-dribbble"></i></a>'; }
				if(!empty($boss_footer_icons_facebook)){ print '<a href="'.esc_url($boss_footer_icons_facebook).'"><i class="fa fa-facebook"></i></a>'; }
				if(!empty($boss_footer_icons_gplus)){ print '<a href="'.esc_url($boss_footer_icons_gplus).'"><i class="fa fa-google-plus"></i></a>'; }
				if(!empty($boss_footer_icons_instagram)){ print '<a href="'.esc_url($boss_footer_icons_instagram).'"><i class="fa fa-instagram"></i></a>'; }
				if(!empty($boss_footer_icons_linkedin)){ print '<a href="'.esc_url($boss_footer_icons_linkedin).'"><i class="fa fa-linkedin"></i></a>'; }
				if(!empty($boss_footer_icons_pinterest)){ print '<a href="'.esc_url($boss_footer_icons_pinterest).'"><i class="fa fa-pinterest"></i></a>'; }
				if(!empty($boss_footer_icons_rss)){ print '<a href="'.esc_url($boss_footer_icons_rss).'"><i class="fa fa-rss"></i></a>'; }
				if(!empty($boss_footer_icons_twitter)){ print '<a href="'.esc_url($boss_footer_icons_twitter).'"><i class="fa fa-twitter"></i></a>'; }
				if(!empty($boss_footer_icons_email)){ print '<a href="'.esc_url($boss_footer_icons_email).'"><i class="fa fa-envelope-o"></i></a>'; }
				
				print '</div>';
			}
		
		print '</section>
		</footer>';
?>
			
		
	
	<!-- CUSTOM PHOTO VIEWER -->
	<div id="dp-photo-viewer">
		<div id="dp-pv-loading"><img src="<?php print get_template_directory_uri().'/images/dp-pv-loading.gif'; ?>" alt="<?php _e('loading','boss'); ?>" /></div>
		<div id="dp-pv-img"></div>
		<div id="dp-pv-close">&times;</div>
		<div id="dp-pv-prev"><i class="fa fa-angle-left"></i></div>
		<div id="dp-pv-next"><i class="fa fa-angle-right"></i></div>
	</div>


<!-- WP FOOTER STARTS -->
<?php wp_footer(); ?>
<!-- WP FOOTER ENDS -->


</body>
</html>