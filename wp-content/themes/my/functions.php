<?php

add_theme_support( 'title-tag' );

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

register_nav_menus(
  array(
    // TODO: considere i18n
    'primary' => 'Primary navigation menu',
    'footer'  => 'Footer navigation menu'
  )
);

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri(), [], 1.0 );
}