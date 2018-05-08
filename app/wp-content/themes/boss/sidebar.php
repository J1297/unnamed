<?php

if((is_search()) && is_active_sidebar('search-widget-area')){
	dynamic_sidebar('search-widget-area');
	
}elseif(is_archive() && is_active_sidebar('archives-widget-area')){		
	dynamic_sidebar('archives-widget-area');
			
}elseif(is_single() || is_home()){		
	dynamic_sidebar('posts-widget-area');	

}elseif(is_page()){		
	dynamic_sidebar('pages-widget-area');	
}

?>
