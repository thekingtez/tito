<?php get_header();

$_404_page = get_post( wpj_get_option( 'wpjobster_not_found_page_id' ) );

if ( wpj_get_option( 'wpjobster_not_found_page_id' ) && $_404_page->post_content && wpj_page_content_type( 'wpjobster_not_found_page_id' ) != 'code' ) {

	wpj_display_content( array( 'page_id' => 'wpjobster_not_found_page_id' ) );

} else {

	wpj_get_template( 'pages/site/404-template.php' );

}

get_footer();