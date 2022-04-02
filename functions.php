<?php

function geeky_theme_support(){
    /**
     * Adds dynamic title tag support
     */
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
/**
 * add_action is a hook which uses a defined function at appropriate place
 * @param {probably WordPress inbuilt function} 'after_setup_theme'
 * @param {the function that I defined} 'geeky_theme_support'
 */
add_action('after_setup_theme', 'geeky_theme_support');


function geeky_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}
/**
 * this function is going to hook into the initialize process which is going to be very early on
 */
add_action('init', 'geeky_menus');


function geeky_register_styles(){
    $version = wp_get_theme()->get( 'Version');
    wp_enqueue_style('geeky-style', get_template_directory_uri() . "/style.css", array('geeky-bootstrap'), $version, 'all');
    wp_enqueue_style('geeky-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('geeky-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');

}
add_action( 'wp_enqueue_scripts', 'geeky_register_styles');


function geeky_register_scripts(){
wp_enqueue_script('geeky-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
wp_enqueue_script('geeky-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
wp_enqueue_script('geeky-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
wp_enqueue_script('geeky-js', get_template_directory_uri() . "assets/js/main.js" , array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'geeky_register_scripts');

?>