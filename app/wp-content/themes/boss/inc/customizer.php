<?php


// put theme options in customizer
	function boss_theme_customizer( $wp_customize ) {    
		
	//colorizer
		$wp_customize->add_setting( 'dp_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default'   => '#990000',
		) );
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 'dp_color', 
			array(				
				'label'      => __( 'Main color scheme', 'boss' ),
				'section'    => 'title_tagline',
				'settings'   => 'dp_color'					
			) ) 
		);
		
		
		
		
		
				
		

		
	//sidebar & footer
		$wp_customize->add_section( 'dp_sidebar_footer_section' , array(
			'title'       => __( 'Sidebar & Footer', 'boss' ),
			'priority'    => 100
		) );
		
		
		
		//sidebar position
			$wp_customize->add_setting( 'dp_default_sidebar_position', array(
				'sanitize_callback' => 'boss_sanitize_sb_position'
			) );
			$wp_customize->add_control( 'dp_default_sidebar_position', array(
				'label'    => __( 'Default sidebar position', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'select',
				'choices' => array(
					'' => __('Right','boss'),
					'left' => __('Left','boss')
				)
			) );
			
			function boss_sanitize_sb_position( $input ) {
				if($input == 'left'){
					return $input;
				}else{
					return '';
				}
			}
		
		
			
							
						
			
			
		//footer social icons			
			$wp_customize->add_setting( 'dp_footer_icons_behance', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_behance', array(
				'label'    => __( 'Footer icons - Behance', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );	
			
			$wp_customize->add_setting( 'dp_footer_icons_dribbble', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_dribbble', array(
				'label'    => __( 'Footer icons - Dribbble', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );
			
			$wp_customize->add_setting( 'dp_footer_icons_facebook', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_facebook', array(
				'label'    => __( 'Footer icons - Facebook', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );
			
			$wp_customize->add_setting( 'dp_footer_icons_gplus', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_gplus', array(
				'label'    => __( 'Footer icons - Google+', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );
			
			$wp_customize->add_setting( 'dp_footer_icons_instagram', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_instagram', array(
				'label'    => __( 'Footer icons - Instagram', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );
			
			$wp_customize->add_setting( 'dp_footer_icons_linkedin', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_linkedin', array(
				'label'    => __( 'Footer icons - LinkedIN', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );
			
			$wp_customize->add_setting( 'dp_footer_icons_pinterest', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_pinterest', array(
				'label'    => __( 'Footer icons - Pinterest', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );
			
			$wp_customize->add_setting( 'dp_footer_icons_rss', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_rss', array(
				'label'    => __( 'Footer icons - RSS', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );
			
			$wp_customize->add_setting( 'dp_footer_icons_twitter', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_twitter', array(
				'label'    => __( 'Footer icons - Twitter', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );			
			
			$wp_customize->add_setting( 'dp_footer_icons_email', array( 'sanitize_callback' => 'esc_url_raw' ) );
			$wp_customize->add_control( 'dp_footer_icons_email', array(
				'label'    => __( 'Footer icons - Email', 'boss' ),
				'section'  => 'dp_sidebar_footer_section',
				'type' => 'text'
			) );				
			
			
			
			

		
	//post sharing
		$wp_customize->add_section( 'dp_post_sharing_section' , array(
			'title'       => __( 'Post Sharing', 'boss' ),
			'priority'    => 100,
			'description' => __( 'Select which sharing icons should appear below posts!', 'boss' )
		) );
		
			$wp_customize->add_setting( 'dp_post_sharing_facebook', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_facebook', array(
				'label'    => __( 'Facebook', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_twitter', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_twitter', array(
				'label'    => __( 'Twitter', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );			
			
			$wp_customize->add_setting( 'dp_post_sharing_gplus', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_gplus', array(
				'label'    => __( 'Google+', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_linkedin', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_linkedin', array(
				'label'    => __( 'LinkedIN', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_pinterest', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_pinterest', array(
				'label'    => __( 'Pinterest', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_reddit', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_reddit', array(
				'label'    => __( 'Reddit', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_digg', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_digg', array(
				'label'    => __( 'Digg', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_delicious', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_delicious', array(
				'label'    => __( 'Delicous', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_stumble', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_stumble', array(
				'label'    => __( 'StumbleUpon', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_tumblr', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_tumblr', array(
				'label'    => __( 'Tumblr', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
			
			$wp_customize->add_setting( 'dp_post_sharing_email', array( 'sanitize_callback' => 'absint' ) );
			$wp_customize->add_control( 'dp_post_sharing_email', array(
				'label'    => __( 'Email', 'boss' ),
				'section'  => 'dp_post_sharing_section',
				'type' => 'checkbox'
			) );
						
			
			
	}
	add_action( 'customize_register', 'boss_theme_customizer' );
	
	
	