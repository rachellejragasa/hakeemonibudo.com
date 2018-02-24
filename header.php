<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Hakeem Onibudo</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" media="screen,projection">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection">
  <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Credits</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
    
          <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Home</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Credits</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_template_directory_uri() . '/assets/images'; ?>/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>