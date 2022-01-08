<?php 

function tomibady_theme_support() {
    //Dynamic Page Title Tag
    add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'tomibady_theme_support' );

//Dynamic Header Stylesheet links
function tomibady_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'tomibady-style', get_template_directory_uri() . "/style.css", array('tomibady-bootstrap'), $version, 'all' );
    wp_enqueue_style( 'tomibady-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '4.4.1', 'all' );
    wp_enqueue_style( 'tomibady-fontawesome', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '5.13.0', 'all' );
}

add_action('wp_enqueue_scripts', 'tomibady_register_styles');


//Dynamic Footer JavaScript links
function tomibady_register_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'tomibady-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'tomibady-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
    wp_enqueue_script( 'tomibady-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
    wp_enqueue_script( 'tomibady-mainjs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true );
}

add_action('wp_enqueue_scripts', 'tomibady_register_scripts');

?>