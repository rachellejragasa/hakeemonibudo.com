<?php 

function wpb_custom_new_menu() {
    register_nav_menu('primary',__( 'Primary menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

?>