<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'theme-app', get_template_directory_uri() . '/dist/app.css');
	wp_enqueue_script( 'theme-app', get_template_directory_uri() . '/dist/app.js');

	wp_localize_script( 'theme-app', 'localized', array(
		'ajax_url'           => admin_url( 'admin-ajax.php' )
	) );
});