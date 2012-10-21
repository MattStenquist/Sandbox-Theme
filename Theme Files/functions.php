<?php

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); 

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'quote' ) );

?>