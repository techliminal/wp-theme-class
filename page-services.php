<?php

	/**
	 * Template Name:  Services Page
	 */
	 

get_header();

if(have_posts()) {
	while(have_posts()) {
		the_post();
		the_title();
		the_content();		
	}
}

global $post;

$cat = get_post_meta($post->ID, 'page_category', TRUE);

/* Now get the services */

$services_posts = new WP_Query( 'category_name='.$cat );

if($services_posts->have_posts()) {
	while($services_posts->have_posts()) {
		$services_posts->the_post();
		?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php
	
		the_content();		
	}
}

wp_reset_query();

get_footer();

