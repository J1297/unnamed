<?php

get_header();


	print '
	<!-- PAGE START -->
	<section id="page" class="wrapper">
		
		<section class="content">
			<article>';
			
					
		
		//404 message
			print '<h4 style="text-align: center;">'.__('ERROR #404','boss').'</h4>
			<h1 style="text-align: center;">'.__('PAGE NOT FOUND','boss').'</h1>
			<p class="aligncenter"><strong>'.__('Sorry!','boss').'</strong> '. __( 'The page you\'re looking for is not available!<br />Maybe you want to try a search?', 'boss' ).'</p>
			';
			
			get_search_form();
		
			
			
		print '
			</article>
		</section>
		
	</section>
	<!-- PAGE ENDS -->';	
	
	
get_footer();


?>