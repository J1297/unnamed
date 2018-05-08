<?php



// register widgetized areas
	function boss_widgets_init() {
				
		register_sidebar( array(
			'name' => __( 'Posts Sidebar', 'boss' ),
			'id' => 'posts-widget-area',
			'description' => __( 'Sidebar for all posts', 'boss' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
				
				
		register_sidebar( array(
			'name' => __( 'Pages Sidebar', 'boss' ),
			'id' => 'pages-widget-area',
			'description' => __( 'Sidebar for all pages', 'boss' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
		
		
		register_sidebar( array(
			'name' => __( 'Archives Sidebar', 'boss' ),
			'id' => 'archives-widget-area',
			'description' => __( 'Sidebar for all Archives, Categories, Tags pages', 'boss' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
		
		
		
		register_sidebar( array(
			'name' => __( 'Search Sidebar', 'boss' ),
			'id' => 'search-widget-area',
			'description' => __( 'Sidebar for Search page', 'boss' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
		
		
		register_sidebar( array(
			'name' => __( 'Footer Widget Area #1', 'boss' ),
			'id' => 'widget-area-one',
			'description' => __( 'Widget area for footer', 'boss' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
		
		
		register_sidebar( array(
			'name' => __( 'Footer Widget Area #2', 'boss' ),
			'id' => 'widget-area-two',
			'description' => __( 'Widget area for footer', 'boss' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
	
	
		register_sidebar( array(
			'name' => __( 'Footer Widget Area #3', 'boss' ),
			'id' => 'widget-area-three',
			'description' => __( 'Widget area for footer', 'boss' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );

		
		register_sidebar( array(
			'name' => __( 'Footer Widget Area #4', 'boss' ),
			'id' => 'widget-area-four',
			'description' => __( 'Widget area for footer', 'boss' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );

	}	
	add_action( 'widgets_init', 'boss_widgets_init' );
	
	
	

// removes the default styles that are packaged with the recent comments widget
	function boss_remove_recent_comments_style() {
		global $wp_widget_factory;
		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	}
	add_action( 'widgets_init', 'boss_remove_recent_comments_style' );
	
	
	