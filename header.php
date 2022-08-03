<?php global $no_header_footer, $post, $jobster_design;

$left_menu_image = ! empty( $jobster_design['left_mobile_menu_image_options_header']['url'] ) ? $jobster_design['left_mobile_menu_image_options_header']['url'] : '';
$left_menu_icon = ! empty( $jobster_design['left_mobile_menu_icon_options_header'] ) ? $jobster_design['left_mobile_menu_icon_options_header'] : 'thick bars';

$right_menu_image = ! empty( $jobster_design['right_mobile_menu_image_options_header']['url'] ) ? $jobster_design['right_mobile_menu_image_options_header']['url'] : '';
$right_menu_icon = ! empty( $jobster_design['right_mobile_menu_icon_options_header'] ) ? $jobster_design['right_mobile_menu_icon_options_header'] : 'th';

// Display header
wpj_get_template( 'header-template.php', array(
	'post'             => $post,
	'jobster_design'   => $jobster_design,
	'no_header_footer' => $no_header_footer,
	'left_menu_image'  => $left_menu_image,
	'right_menu_image' => $right_menu_image,
	'icon_menu_left'   => $left_menu_icon,
	'icon_menu_right'  => $right_menu_icon,
	'menu_location'    => apply_filters( 'wpj_header_secondary_loggedin_menu_filter', 'wpjobster_header_secondary_loggedin_menu' )
) );