<!DOCTYPE html>
<html>
<head>
  <title>PhotoGenik</title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"> 
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="w3-container w3-teal">
    <div class="w3-row">
      <div class="w3-col m9 l9">
        <h1><?php bloginfo('name'); ?></h1>
      </div>
      <div class="w3-col m3 l3">
        <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
           <input name="s" class="w3-input" type="text" 
            placeholder="Search...">
        </form>

      </div>
    </div> 
    </header>
    <div class="w3-row">
        <div class="w3-col m3 l3">
          <?php if(is_active_sidebar('sidebar')) : ?>
           <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
        </div>
        <div class="w3-col m9 l9">
          <div class="w3-row">