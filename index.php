<?php

get_header();

?>

<div id="content">

<?php

if(have_posts()) {
	while(have_posts()) {
		the_post();
		the_title();
		the_content();

		?>
		<div class="postmeta">		
		<?php 
		
		global $post;
		
		echo get_the_term_list($post->ID, 'category', 'Categories: ', ' >> ');
		
		?>
		</div> <!-- postmeta -->
		<?
		
	}  // end while in the loop
} // if have posts
?>

</div> <!-- content -->

<?php
get_footer();


