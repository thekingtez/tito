<?php

$current_auth = get_query_var( 'author_name' ) ? get_user_by( 'slug', get_query_var( 'author_name' ) ) : get_userdata( get_query_var( 'author' ) );

wp_redirect( wpj_get_user_profile_link( $current_auth->ID ) ); exit;