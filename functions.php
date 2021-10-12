<?php

function hobartcomm_add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css', array());
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array());
    
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array (), 1.1, false);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'hobartcomm_add_theme_scripts' );


// MENU

if ( ! function_exists( 'hobartcomm_register_nav_menu' ) ) {
 
  function hobartcomm_register_nav_menu(){
      register_nav_menus( array(
          'primary_menu' => __( 'Primary Menu', 'hobartcomm' ),
          'footer_menu'  => __( 'Footer Menu', 'hobartcomm' ),
      ) );
  }
  add_action( 'after_setup_theme', 'hobartcomm_register_nav_menu', 0 );
}