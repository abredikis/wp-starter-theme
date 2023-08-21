<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'app.css', get_template_directory_uri() . '/dist/app.css');
    wp_enqueue_script( 'app.js', get_template_directory_uri() . '/dist/app.js');
});