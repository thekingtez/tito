<?php global $no_header_footer, $wpjobster_currencies_array, $jobster_design;

$files = array(
	get_template_directory_uri() . '/assets/images/carts/card-visa.png',
	get_template_directory_uri() . '/assets/images/carts/card-mastercard.png',
	get_template_directory_uri() . '/assets/images/carts/card-americanexpress.png',
	get_template_directory_uri() . '/assets/images/carts/card-discover.png',
	get_template_directory_uri() . '/assets/images/carts/card-jcb.png',
	get_template_directory_uri() . '/assets/images/carts/card-dinersclub.png',
	get_template_directory_uri() . '/assets/images/carts/card-paypal.png'
);

wpj_get_template( 'footer-template.php', array(
	'jobster_design'             => $jobster_design,
	'widget_columns'             => ! empty( $jobster_design['select_number_cols'] ) ? $jobster_design['select_number_cols'] : 5,
	'cards'                      => ! empty( $jobster_design['image_demo'] ) ? $jobster_design['image_demo'] : '',
	'social_media_data'          => ! empty( $jobster_design['social_media_list'] ) ? $jobster_design['social_media_list'] : '',
	'no_header_footer'           => $no_header_footer,
	'wpjobster_currencies_array' => $wpjobster_currencies_array,
	'files'                      => $files
) );