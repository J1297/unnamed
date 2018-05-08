<?php
$boss_squery = get_search_query();
?>
<!-- SEARCH FORM -->
<div class="search">
	<form action="<?php print esc_url( home_url( '/' ) ); ?>/" method="get" accept-charset="utf-8" class="search-form">
		<input type="text" class="input-text" name="s" value="<?php if(!empty($boss_squery)){ print $boss_squery; }else{ _e('SEARCH', 'boss'); } ?>" onfocus="if(this.value=='<?php _e('SEARCH', 'boss'); ?>'){this.value=''};" onblur="if(this.value==''){this.value='<?php _e('SEARCH', 'boss'); ?>'}" />
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
</div>