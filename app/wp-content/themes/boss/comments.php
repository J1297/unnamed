<?php
/*
	Template for displaying Comments.
*/

// if the current post is protected by a password and the visitor has not yet entered the password we will return early without loading the comments. */
	if ( post_password_required() ){
		return;
	}

	
if ( have_comments() ){

	print '
	<section class="comments">
		<h3 class="comments-title">'.esc_html__('COMMENTS','boss').' <span>('.intval(get_comments_number()).')</span></h3>';

		print '
		<ul class="commentlist">
		'; 
		
		//list comments
			wp_list_comments( array( 'callback' => 'boss_comments' ) ); 
				
		print '
		</ul>	
		';
		
		//comment nav
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {
			print '<nav id="comment-nav-below" class="navigation" role="navigation">			
				<div class="nav-previous">'; previous_comments_link( esc_html__( 'PREVIOUS', 'boss' ) ); print '</div>
				<div class="nav-next">'; next_comments_link( esc_html__( 'NEXT', 'boss' ) ); print '</div>
			</nav>';
		}	
	
	print '</section>';
}

	
	//for translation
	print '<p class="hidden" id="comment-thanks">'.esc_html__('Thank you for submitting your comment!','boss').'</p>';
	
	
	
if(comments_open()){	
	
	
	
	comment_form( array( 
		'title_reply' => '<span>'.esc_html__('LEAVE A REPLY ','boss').'</span>',
		'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="4" aria-required="true"></textarea></p>',
		'comment_notes_after' => '',
		'comment_notes_before' => '',
		'label_submit' => esc_html__('SUBMIT','boss'),
		'fields' => array(
			'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr__('NAME', 'boss') . '" size="30" onfocus="if(this.value==\'' . esc_attr__('NAME', 'boss') . '\'){this.value=\'\'};" onblur="if(this.value==\'\'){this.value=\'' . esc_attr__('NAME', 'boss') . '\'}" /></p>',
			'email' => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr__('EMAIL', 'boss') . '" size="30" onfocus="if(this.value==\'' . esc_attr__('EMAIL', 'boss') . '\'){this.value=\'\'};" onblur="if(this.value==\'\'){this.value=\'' . esc_attr__('EMAIL', 'boss') . '\'}" /></p>',
			'url' => '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr__('WEBSITE', 'boss') . '" size="30" onfocus="if(this.value==\'' . esc_attr__('WEBSITE', 'boss') . '\'){this.value=\'\'};" onblur="if(this.value==\'\'){this.value=\'' . esc_attr__('WEBSITE', 'boss') . '\'}" /></p>'
			)
	) );
}
	
?>
