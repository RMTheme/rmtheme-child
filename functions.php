<?php
// Pull the Parent Theme CSS
add_action( 'wp_enqueue_scripts', 'rmtheme_child_enqueue_styles' );
function rmtheme_child_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
