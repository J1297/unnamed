<?php

get_header();



//featured image			
if (has_post_thumbnail(get_the_ID())) {
    $boss_src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
    print '<div class="featured-image" style="background-image:url(\'' . $boss_src[0] . '\')"></div>';
}



print '
	<!-- PAGE START -->
	<section id="page" class="wrapper">
	';



$boss_default_sidebar_position = get_theme_mod('dp_default_sidebar_position');
$boss_widget_areas_sidebar = 'pages-widget-area';


//sidebar on left
if (!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar) && $boss_default_sidebar_position == 'left') {
    print '<section class="sidebar left widget-area">';
    get_sidebar();
    print '</section>';
}

//page content
if (!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar)) {
    print '<section class="content with-sidebar">';
} else {
    print '<section class="content">';
}

if (have_posts()) :
    print '<article class="entry-content">';
    while (have_posts()) : the_post();

        the_content();

        wp_link_pages(array('before' => '<div class="page-links">' . __('<strong>Pages:</strong>', 'boss'), 'after' => '</div>'));
    endwhile;
    print '</article>';
endif;



if (comments_open()) {

    print '
				
				<hr />
					
				<!-- COMMENTS -->							
				
				<section id="comments">';

    comments_template('', true);

    print '
				</section>';
}

print '
			</section>
		';


//sidebar on right
if (!empty($boss_widget_areas_sidebar) && is_active_sidebar($boss_widget_areas_sidebar) && $boss_default_sidebar_position != 'left') {
    print '<section class="sidebar widget-area">';
    get_sidebar();
    print '</section>';
}


print '<div class="clear"></div>';



print '
	</section>
	<!-- PAGE ENDS -->';


get_footer();
?>
