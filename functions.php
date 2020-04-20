<?php 

//Add theme support 


//Load in CSS

function wphierarchy_enqueue_styles() {
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
}

add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_styles');