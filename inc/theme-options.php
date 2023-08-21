<?php

add_action('init', function () {
    /*
    * Enqueue block editor assets
    */
    add_theme_support('editor-styles');
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

    /*
    * Restore the Customizer
	*/

    add_action( 'customize_register', function() {
        // There's no need to return anything.
        // The empty callback will do the trick.
    } );
});


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

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'theme_setup' );