<?php get_header();

global $wp_query;

if ( isset( $wp_query->queried_object->ID ) && $wp_query->queried_object->ID == wpj_get_option( 'wpjobster_all_blog_posts_page_id' ) ) {

	$all_blog_posts_page = get_post( wpj_get_option( 'wpjobster_all_blog_posts_page_id' ) );

	if ( wpj_get_option( 'wpjobster_all_blog_posts_page_id' ) && $all_blog_posts_page->post_content && wpj_page_content_type( 'wpjobster_all_blog_posts_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_all_blog_posts_page_id' ) );

	} else {

		wpj_get_template( 'pages/blog/all-blogs-template.php' );

	}

} else {

	wpj_get_template( 'index-template.php' );

}

get_footer(); ?>
