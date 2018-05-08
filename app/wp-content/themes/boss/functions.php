<?php

// theme url
	$theme_text_domain = 'boss';		
	
	
	
// sets up the content width value based on the theme's design and stylesheet
	if ( ! isset( $content_width ) ){
		$content_width = 1000;
	}
	
	

// set up theme defaults
	function boss_setup() {
		
		// makes theme available for translation
		load_theme_textdomain( 'boss', get_template_directory() . '/languages' );
		
				
		// adds rss feed links to <head> for posts and comments
		add_theme_support( 'automatic-feed-links' );
		
		//theme is not defining titles on its own
		add_theme_support( 'title-tag' );		
		
		// this theme uses wp_nav_menu() in one location
		register_nav_menu( 'primary', __( 'Primary Menu', 'boss' ) );
		register_nav_menu( 'footer', __( 'Footer Menu', 'boss' ) );
				
				
		//editor-style.css
		add_editor_style();		
		
			
		//remove gallery inline style
		add_filter( 'use_default_gallery_style', '__return_false' );
		
								
		// this theme uses a custom image size for featured images, displayed on "standard" posts
		add_theme_support( 'post-thumbnails' );
		
		
		//logo changing supported
		add_theme_support( 'custom-logo' );
		
		
		// set thumbnail sizes
		set_post_thumbnail_size( 225, 200, true ); // width, height, crop = true		
		
		
		//limit excerpt
		function boss_excerpt_length($length) {
			return 30;
		}
		add_filter('excerpt_length', 'boss_excerpt_length');
		
	}
	add_action( 'after_setup_theme', 'boss_setup' );
	
		
		
					
	
	
//frontend scipts and styles
	function boss_frontend_load(){
	
		//css
		wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css',array(),null,'all');	
		wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css',array(),null,'all');								
		wp_enqueue_style('dp-googlefonts', '//fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:400,700',array(),null,'all');	
		wp_enqueue_style('dp-default', get_template_directory_uri().'/style.css',array('reset','font-awesome','dp-googlefonts'),null,'all');	
		wp_enqueue_style('dp-responsive-style', get_template_directory_uri().'/style-responsive.css',array('dp-default'),null,'all');
		
		
		//ie-only style sheets
		global $wp_styles;		
		wp_register_style('dp-ltie9-def', get_template_directory_uri(). '/style.css',array(),null);
		$wp_styles->add_data('dp-ltie9-def', 'conditional', 'lt IE 9');		
		wp_enqueue_style('dp-ltie9-def');
		
		
		//js		
		wp_enqueue_script('html5shiv', get_template_directory_uri().'/js/html5.js');	
		wp_script_add_data('html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script('retina-js', get_template_directory_uri() . '/js/retina.js', '', '', true );				
		wp_enqueue_script('dp-startup', get_template_directory_uri().'/js/startup.js', array('jquery'));
		wp_enqueue_script('dp-imageviewer', get_template_directory_uri().'/js/dp.imageviewer.js', array('jquery'));	
						
		
		
		if( is_single() && comments_open() && get_option( 'thread_comments' )){
			wp_enqueue_script( 'comment-reply' );
		}	
		
				
		//colorizer
		$boss_color = wp_filter_nohtml_kses(get_theme_mod('dp_color')); 
		if(!empty($boss_color) && $boss_color != '#990000'){
			$boss_extra_css = '		
			.content a:hover,
			.content  ul:not([class]) li:before,
			.header .menu li a:hover,
			.header .menu li a:hover i.fa,
			footer a:hover,
			footer a:hover i,
			a.button,
			.content a.button,
			.content p a.button,
			.content a.dp-button,
			a.button:hover,
			.content a.button:hover,
			.content p a.button:hover,
			.content a.dp-button:hover,
			.blog .post-title a:hover,
			.blog-masonry h3 a:hover,
			.post .sharing a:hover i,
			.prev-post a:hover i.fa,
			.next-post a:hover i.fa,
			.content .pages-left a:hover,
			.content .pages-right a:hover,
			.pages-left a:hover i.fa,
			.pages-right a:hover i.fa,
			#pf-category-selector a:hover,
			#pf-category-selector a.active,
			.portfolio .item .category,
			.widget-area a:hover,
			.widget .tagcloud a:hover,
			.dp_widget_cats .cloud a:hover,
			.dp_widget_posts li:hover .title,
			.dp-iconbox.alignleft i.fa, 
			.dp-iconbox.alignright img.dp-icon,
			.dp-toggle i,
			.dp-posts .category,
			.dp-pricing-table a.dp-button.style2:hover,
			#responsive-menu:hover i.fa,
			#respo-menu-holder .menu-responsive > li:hover > a,
			#respo-menu-holder .sub-menu li:hover a
			{
				color: '.$boss_color.';
			}
			
			.content p a:hover,
			.header,
			.header .menu .sub-menu,
			.header .search,
			.content h1.deco-side,
			.content h2.deco-side,
			.content h3.deco-side,
			.content h4.deco-side,
			.content h5.deco-side,
			.content h6.deco-side,
			a.button:hover,
			.content a.button:hover,
			.content p a.button:hover,
			.content a.dp-button:hover,
			.blog-masonry .head,
			.prev-post a:hover i.fa,
			.next-post a:hover i.fa,
			.pages-left a:hover i.fa,
			.pages-right a:hover i.fa,
			.comments-title,
			#reply-title,
			#pf-category-selector a:hover,
			#pf-category-selector a.active,
			.footer-widgets,
			.widget .tagcloud a:hover,
			.dp_widget_cats .cloud a:hover,
			.dp-tabs .tabnav-input:checked + .tabnav-label,
			.dp-pricing-table:hover,
			.dp-pricing-table a.dp-button.style2:hover,
			#responsive-menu:hover i.fa
			{
				border-color: '.$boss_color.';
			}
			
			.header .menu > li.current-menu-item,
			.header .menu > li.current-menu-parent,
			.header .menu .sub-menu li:hover,
			.content h1 .deco,
			.content h2 .deco,
			.content h3 .deco,
			.content h4 .deco,
			.content h5 .deco,
			.content h6 .deco,
			.blog .post-date,
			.blog .post-date span,
			.widget-title:before,
			.footer-widgets .widget-title:before,
			.dp_widget_posts .title:after,
			.dp-cta .overlay
			{
				background-color: '.$boss_color.';
			}
			';
			
			
			wp_add_inline_style( 'dp-default', $boss_extra_css );
		}
		
		
	}
	add_action( 'wp_enqueue_scripts', 'boss_frontend_load' );
	
	
	
	
// widgets
	include_once('inc/widget_areas.php');
	

	
	
// comment functions

	function boss_comments( $comment, $args, $depth ){		
		print '
		<li>'.get_avatar($comment,'60');
		
				
		print '
			<div class="holder">
				<p class="comment-author"><b>'.get_comment_author().'</b><br />';
					printf( __( '%1$s., %2$s','boss'), get_comment_date('M d, Y'),  get_comment_time('H:i') );					
					edit_comment_link( __( ' (Edit)' ,'boss'), '' );					
					
					print ' &#8226; ';
					
					comment_reply_link( 
						array_merge( $args, array( 
							'depth' => $depth, 
							'max_depth' => $args['max_depth'], 
							'reply_text' => __('Reply','boss')
						) ) );
						
					
					
				print '</p>		
				<p class="comment">'.get_comment_text().'</p>
			</div>';
					
	}
	
		
		
// add top dismissable note
	function boss_notice() {				
		global $pagenow;
		
		if($pagenow == 'theme-install.php' || $pagenow == 'themes.php'){
			echo '<div class="notice notice-success is-dismissible">
				<p>A growing number of themes for the price of one! <a href="https://divpusher.com" target="_blank">Join the club now!</a></p>			
			</div>';			
		}
	}
	add_action( 'admin_notices', 'boss_notice' );

		
		
// customizer
	include_once('inc/customizer.php');
	
	
	

	
	



		
?>