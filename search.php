<?php get_header();

global $wp_query;

wpj_get_template( 'search-template.php', array( 'wp_query' => $wp_query ) );

get_footer();