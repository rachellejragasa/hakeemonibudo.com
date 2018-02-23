<?php 

/**
 * Enqueue scripts and styles.
 */
function customtheme_scripts() {
    
    // Theme stylesheet
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

    // Theme Scripts
 

}

add_action( 'wp_enqueue_scripts', 'customtheme_scripts' );


?>