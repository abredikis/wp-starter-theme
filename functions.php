<?php
require get_template_directory() . '/inc/theme-options.php';
require get_template_directory() . '/inc/enqueue-scripts.php';



function update_user_option_admin_color( $color_scheme ) {
	$color_scheme = 'modern';

	return $color_scheme;
}