<?php get_header();

$term = get_queried_object();

if ( $term->name == 'job' ) {

	$search_job_page = get_post( wpj_get_option( 'wpjobster_advanced_search_id' ) );

	if ( wpj_get_option( 'wpjobster_advanced_search_id' ) && $search_job_page->post_content && wpj_page_content_type( 'wpjobster_advanced_search_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_advanced_search_id' ) );

	} else {

		wpj_get_template( 'pages/job/search-job-template.php', array( 'term' => $term ) );

	}

} elseif ( $term && $term->name == 'request' ) {

	$all_requests_page = get_post( wpj_get_option( 'wpjobster_all_requests_page_id' ) );

	if ( wpj_get_option( 'wpjobster_all_requests_page_id' ) && $all_requests_page->post_content && wpj_page_content_type( 'wpjobster_all_requests_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_all_requests_page_id' ) );

	} else {

		wpj_get_template( 'pages/request/all-requests-template.php', array( 'term' => $term ) );

	}

} elseif ( $term && $term->name == 'offer' ) {

	$all_proposals_page = get_post( wpj_get_option( 'wpjobster_all_proposals_page_id' ) );

	if ( wpj_get_option( 'wpjobster_all_proposals_page_id' ) && $all_proposals_page->post_content && wpj_page_content_type( 'wpjobster_all_proposals_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_all_proposals_page_id' ) );

	} else {

		global $wp_query;

		$tabs = wpj_get_tabs_by_page( 'user_proposals' );

		$active_tab = isset( $wp_query->query_vars['pg'] ) ? urldecode( $wp_query->query_vars['pg'] ) : '';
		if ( ! $active_tab ) $active_tab = array_key_first( $tabs );

		wpj_get_template( 'pages/request/all-proposals-template.php',
			array(
				'active_tab'          => $active_tab,
				'tabs'                => $tabs,
				'uid'                 => get_current_user_id(),
				'count_send'          => wpj_get_user_proposals( get_current_user_id(), 'send', 'count' ),
				'count_received'      => wpj_get_user_proposals( get_current_user_id(), 'received', 'count' ),
				'enable_custom_offer' => wpj_get_option( 'wpjobster_enable_custom_offers' )
			)
		);

	}

} elseif ( $term && $term->name == 'news' ) {

	$all_news_page = get_post( wpj_get_option( 'wpjobster_all_news_page_id' ) );

	if ( wpj_get_option( 'wpjobster_all_news_page_id' ) && $all_news_page->post_content && wpj_page_content_type( 'wpjobster_all_news_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_all_news_page_id' ) );

	} else {

		wpj_get_template( 'pages/blog/all-news-template.php', array( 'term' => $term ) );

	}

} else {

	$all_blog_posts_page = get_post( wpj_get_option( 'wpjobster_all_blog_posts_page_id' ) );

	if ( wpj_get_option( 'wpjobster_all_blog_posts_page_id' ) && $all_blog_posts_page->post_content && wpj_page_content_type( 'wpjobster_all_blog_posts_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_all_blog_posts_page_id' ) );

	} else {

		wpj_get_template( 'pages/blog/all-blogs-template.php', array( 'term' => $term ) );

	}

}

get_footer();