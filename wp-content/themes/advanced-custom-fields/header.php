<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="<?php bloginfo('charset')?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
