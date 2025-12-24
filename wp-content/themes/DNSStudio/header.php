<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  

</head>
<nav class="navbar">
<span id="logo"> 
<a href="<?php echo site_url('/')?>"><h2 id="logo">DNS</h2></a>
</span>

<ul>
    <a href="<?php echo site_url('/work')?>"><li> Work</li></a>
    <li>Pricing</li>
    <li>Services</li>
    <li>More</li>
</ul>
</nav>
<body <?php body_class(); ?>>
  <header>


</header>
