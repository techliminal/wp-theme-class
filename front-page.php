<?php

get_header();
?>
<h1>This is the homepage!</h1>

<?

if(have_posts()) {
	while(have_posts()) {
		the_post();
		the_title();
		the_content();	
	}
}



get_footer();

