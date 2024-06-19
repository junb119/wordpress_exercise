<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'Main-menu' => __( 'Header Menu' ),
      'Footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );
