<?php 

// Support WP Menu
function wpb_custom_new_menu() {
    register_nav_menu('primary',__( 'Primary menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

// Hide Content Editor
function hide_editor() {
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
    
    // Hide the editor on the page titled 'Homepage'
    $homepgname = get_the_title($post_id);
    if($homepgname == 'Home'){ 
      remove_post_type_support('page', 'editor');
    }
  }
  add_action( 'admin_init', 'hide_editor' );

  // Support Custom Header
  $defaults = array(
    'default-image'          => '',
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => true,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
  );
  add_theme_support( 'custom-header' );
