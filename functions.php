<?php 
function alpha_bootstraping(){
    load_theme_textdomain( "alpha");
    add_theme_support( "title-tag");
    register_nav_menu( "topmenu", __("Top Menu", "alpha") );

}
add_action( "after_setup_theme", "alpha_bootstraping");

function alpha_assets() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( "google-fonts", "//fonts.googleapis.com/css2?family=Pattaya&family=Roboto:wght@400;500;700&display=swap");
    wp_enqueue_style( "bootstrap", get_theme_file_uri( "assets/bootstrap.min.css" ), null, time());
    wp_enqueue_style( "main-css", get_theme_file_uri( "assets/main.css" ), null, time());
    // wp_enqueue_script( 'main-js', get_theme_file_uri("assets/js/main.js"), array("jquery"), time(), true );
}
add_action( 'wp_enqueue_scripts', 'alpha_assets' );