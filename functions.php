<?php

/**
 * Enqueue scripts and styles.
 */
function jsr_wp_scripts() {
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/dist/site.css' );
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/dist/site.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'jsr_wp_scripts' );