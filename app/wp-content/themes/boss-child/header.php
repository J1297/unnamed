<!DOCTYPE html>
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	
	<!-- DISPLAY MESSAGE IF JAVA IS TURNED OFF -->	
	<noscript>		
		<div id="notification"><strong><?php print __('This website requires JavaScript!</strong> Please enable JavaScript in your browser and reload the page!','boss'); ?></div>	
	</noscript>

				
		
	<!-- HEADER -->
	<header class="header">
		<nav class="desktop-res">
		<?php		
		//logo
			if(function_exists( 'has_custom_logo' ) && has_custom_logo()){
				print '<div class="logo">'.get_custom_logo().'</div>';
			}else{				
				//site title and tagline				
				print '<p class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></p>';
			}
					
			
		//menu
			$boss_menu_items = wp_nav_menu(
				array('container' => 'ul',
				'theme_location' => 'primary',
				'menu_id' => 'menu-main',
				'menu_class' => 'menu',
				'echo' => false,
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="menu-search"><a><i class="fa fa-search"></i></a></li></ul>'
				)
			);
			
			if(!empty($boss_menu_items)){
				print $boss_menu_items;
			}			
		
				
			
		//search form
			get_search_form();

		?>			
		</nav>	
		
		
		<nav class="responsive-res">
			<?php				
				
				if(function_exists( 'has_custom_logo' ) && has_custom_logo()){
					print '<div class="logo">'.get_custom_logo().'</div>';
				}else{				
					//site title and tagline				
					print '<p class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></p>';
				}
				
				print '
				<div id="responsive-menu"><i class="fa fa-bars"></i></div>
				
				';	
			?>
			
			<div id="respo-menu-holder">
				<?php			
				$boss_def = array('container' => 'ul',
				'theme_location' => 'primary',				
				'menu_class' => 'menu-responsive',
				'echo' => true);
				wp_nav_menu($boss_def);					
				?>
			</div>
		</nav>
			
	</header>		
	<div class="header-space"></div>
	