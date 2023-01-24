<?php

/**
 * 
 * Theme Functions
 *
 *@package Aquila
 */

//  print_r(get_template_directory_uri());
//  wp_die();

//  print_r(get_stylesheet_uri());
//  wp_die();

// print_r(filemtime(get_template_directory() . '/style.css'));
// wp_die();

// wp_register_style('styles-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
// wp_enqueue_style('styles-css');

function aquila_enqueue_scripts()
{
    // Register Styles.
    wp_register_style('styles-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('boostrap-css', get_template_directory_uri().'assets/src/library/css/bootstrap.min.css', [], false, 'all');

    // Register Scripts.
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('boostrap-js', get_template_directory_uri().'/assets/src/library/js/booststrap.min.js', ['jquery'], false, true);
    
    // Enqueue Styles
    wp_enqueue_style('styles-css');
    wp_enqueue_style('boostrap-css');

    // Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('boostrap-js');

}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
