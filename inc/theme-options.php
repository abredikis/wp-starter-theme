<?php

add_action( 'init', function () {
	/*
	* Enqueue block editor assets
	*/
	add_theme_support( 'editor-styles' );
	add_editor_style( 'dist/app.css' );

	/*
	* Load scripts in head
	*/
	add_action( 'wp_head', function () {
	} );

	/*
	* Load scripts in body
	*/
	add_action( 'wp_body_open', function () {
	} );

} );


function remove_default_img_sizes( $sizes ) {
	$targets = ['1536x1536', '2048x2048' ];

	foreach ( $sizes as $size_index => $size ) {
		if ( in_array( $size, $targets ) ) {
			unset( $sizes[ $size_index ] );
		}
	}

	return $sizes;
}

add_filter( 'intermediate_image_sizes', 'remove_default_img_sizes', 10, 1 );


function theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	update_option( 'medium_size_w', 768 );
	update_option( 'medium_size_h', 768 );

	update_option( 'medium_large_size_w', 1024 );
	update_option( 'medium_large_size_h', 1024 );

	update_option( 'large_size_w', 1440 );
	update_option( 'large_size_h', 1440 );

	add_image_size( 'small', 400, 400 );
	add_image_size( 'extra_large', 1920, 1440 );
}

add_action( 'after_setup_theme', 'theme_setup' );