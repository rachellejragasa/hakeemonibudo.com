<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Hakeem Onibudo</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" media="screen,projection">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen,projection"/>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="<?php echo get_template_directory_uri() . '/assets/js/init.js'; ?>"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>
<div class="navbar-fixed">
<nav role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="#home" class="brand-logo">Hakeem Onibudo</a>
      <span class="logo-strapline">MOTIVATE, LEAD, INSPIRE</span>
      <ul class="right hide-on-med-and-down">
        <?php
          wp_nav_menu(array('menu' => 'primary', 'items_wrap' => '<ul><li id="item-id"></li>%3$s</ul>'));
        ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
<ul id="nav-mobile" class="side-nav">
  <?php
    wp_nav_menu(array('menu' => 'primary', 'items_wrap' => '<ul><li id="item-id"></li>%3$s</ul>'));
  ?>
</ul>
<div class="section no-pad-bot no-pad-top" id="home">
  <img src="<?php header_image();?>" alt="" />
</div>