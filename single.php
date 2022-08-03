<?php get_header();

global $post, $jobster_design;

if ( is_singular( 'job' ) ) {

	$uid  = $post->post_author;
	$user = get_userdata( $post->post_author );

	wpj_save_last_viewed_job( $post->ID );

	$single_job_page = get_post( wpj_get_option( 'wpjobster_single_job_page_id' ) );

	if ( wpj_get_option( 'wpjobster_single_job_page_id' ) && $single_job_page->post_content && wpj_page_content_type( 'wpjobster_single_job_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_single_job_page_id' ) );

	} else {

		wpj_get_template( 'pages/job/single-job-template.php', array(
			'post'                 => $post,
			'pid'                  => $post->ID,
			'user'                 => $user,
			'has_cover_image'      => ! empty( get_post_meta( get_the_ID(), 'cover-image', true ) ) && wpj_get_attachment_image_url( get_post_meta( get_the_ID(), 'cover-image', true ), 'job_cover_image' ) ? true : false,
			'display_tags'         => get_the_tags() ? true : false,
			'display_views'        => wpj_get_option( 'wpjobster_enable_job_views' ) == 'yes' ? true : false,
			'display_custom_offer' => wpj_get_option( 'wpjobster_enable_custom_offers' ) != 'no' && $post->post_author != get_current_user_id() && apply_filters( 'hide_for_buyers', true, $post->post_author ) ? true : false
		) );

	}

} elseif ( is_singular( 'request' ) ) {

	$single_request_page = get_post( wpj_get_option( 'wpjobster_single_request_page_id' ) );

	if ( wpj_get_option( 'wpjobster_single_request_page_id' ) && $single_request_page->post_content && wpj_page_content_type( 'wpjobster_single_request_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_single_request_page_id' ) );

	} else {

		wpj_get_template( 'pages/request/single-request-template.php', array(
			'pid'            => get_the_ID(),
			'post'           => $post,
			'post_content'   => wpj_apply_filter_to_string( wpautop( strip_tags( get_the_content() ) ), false, 'requestlistings' ),
			'jobster_design' => $jobster_design
		) );

	}

} elseif ( is_singular( 'offer' ) ) {

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

} elseif ( is_singular( 'news' ) ) {

	$single_news_page = get_post( wpj_get_option( 'wpjobster_single_news_page_id' ) );

	if ( wpj_get_option( 'wpjobster_single_news_page_id' ) && $single_news_page->post_content && wpj_page_content_type( 'wpjobster_single_news_page_id' ) != 'code' ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_single_news_page_id' ) );

	} else {

		wpj_get_template( 'pages/blog/single-news-template.php' );

	}

} else {

	$single_blog_page = get_post( wpj_get_option( 'wpjobster_single_blog_page_id' ) );

	if ( wpj_get_option( 'wpjobster_single_blog_page_id' ) && $single_blog_page->post_content && wpj_page_content_type( 'wpjobster_single_blog_page_id' ) != 'code'  ) {

		wpj_display_content( array( 'page_id' => 'wpjobster_single_blog_page_id' ) );

	} else {

		wpj_get_template( 'pages/blog/single-blog-template.php' );

	}

}

get_footer();