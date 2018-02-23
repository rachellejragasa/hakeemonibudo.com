<?php 

/**
 * Enqueue scripts and styles.
 */
function customtheme_scripts() {
    // Theme stylesheet
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style('materialize-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css');
}
add_action( 'wp_enqueue_scripts', 'customtheme_scripts' );


?>