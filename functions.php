<?php

/**
 * Fancy Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */

//  libraries adding start
 function fancy_lab_scripts() {
  //  wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), '1.0', 'all' ); // for deployment

   wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' ); // for development environment

   wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all' );
   wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );

 }
 add_action( 'wp_enqueue_scripts', 'fancy_lab_scripts' );

//  libraries adding end

// menu start
 function fancy_lab_config() {
    register_nav_menus(
      array(
        'fancy_lab_main_menu' => 'Fancy Lab Main Menu'
      )
    );
 }
 add_action( 'after_setup_theme', 'fancy_lab_config', 0 );

//  menu end
