<?php get_header();

$term = get_queried_object();

$posts = new WPJ_Load_More_Posts(
	array(
		'function_name'   => 'wpj_display_blog_list_items',
		'posts_per_page'  => wpj_get_option( 'posts_per_page' ) ? wpj_get_option( 'posts_per_page' ) : 12,
		'container_class' => 'blog-posts no-margin',
		'post_status'     => 'publish',
		'container_class' => 'articles-grid ui three cards stackable',
		'post_type'       => array( 'news', 'post', 'job', 'request' ),
		'tag'             => $term->slug
	)
);

wpj_get_template( 'tag-template.php', array( 'term' => $term, 'posts' => $posts ) );

get_footer();