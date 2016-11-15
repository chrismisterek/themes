<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

// engueue child theme javascript

function psi_scripts_method() {
	wp_enqueue_script( 'psi_script', get_stylesheet_directory_uri() . '/psi_script.js', array( 'jquery' ), true );
}

add_action( 'wp_enqueue_scripts', 'psi_scripts_method' );

// adding svg

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

?>
