<?php get_header();

$term = get_queried_object();

if ( $term->taxonomy == 'request_cat' ) {

	$search_request_page = get_post( wpj_get_option( 'wpjobster_advanced_search_request_page_id' ) );

	if ( wpj_get_option( 'wpjobster_advanced_search_request_page_id' ) && $search_request_page->post_content && wpj_page_content_type( 'wpjobster_advanced_search_request_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_advanced_search_request_page_id' ) );

	} else {

		wpj_get_template( 'pages/request/search-request-template.php', array( 'is_category' => true, 'term' => $term ) );
	}

} elseif ( $term->taxonomy == 'job_cat' ) {

	$search_job_page = get_post( wpj_get_option( 'wpjobster_advanced_search_id' ) );

	if ( wpj_get_option( 'wpjobster_advanced_search_id' ) && $search_job_page->post_content && wpj_page_content_type( 'wpjobster_advanced_search_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_advanced_search_id' ) );

	} else {

		wpj_get_template( 'pages/job/search-job-template.php', array( 'is_category' => true, 'term' => $term ) );
	}

} elseif ( $term->taxonomy == 'news_cat' ) {

	$all_news_page = get_post( wpj_get_option( 'wpjobster_all_news_page_id' ) );

	if ( wpj_get_option( 'wpjobster_all_news_page_id' ) && $all_news_page->post_content && wpj_page_content_type( 'wpjobster_all_news_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_all_news_page_id' ) );

	} else {

		wpj_get_template( 'pages/blog/all-news-template.php', array( 'is_category' => true, 'term' => $term ) );

	}

} else {

	wp_redirect( get_bloginfo( 'url' ) ); exit;

}

get_footer();