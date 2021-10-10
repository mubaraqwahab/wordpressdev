<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ) ?></title>
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>" />
  <?php wp_head() ?>
</head>
<body>
  <header>
    <a href="<?php bloginfo( 'url' ) ?>"><?php bloginfo( 'name' ) ?></a>
    <?php
      wp_nav_menu(
        array(
          'menu' => '',
          'menu_id' => 'primary-menu-list',
          'menu_class' => 'primary-menu-list',
          'container' => 'nav',
          'container_id' => 'primary-menu-nav',
          'container_class' => 'primary-menu-nav',
          'theme_location' => 'primary',
          'fallback_cb' => false,
        )
      )
    ?>
  </header>