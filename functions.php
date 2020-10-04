<?php
add_theme_support('post-thumbnails');

function montheme_supports() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'montheme_supports');


function montheme_register_assets(){
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
  wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', ['popper'], false, true);
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');

  wp_enqueue_style('Myfirstwptheme', get_stylesheet_uri(), array());
}

add_action('wp_enqueue_scripts', 'montheme_register_assets');

function montheme_document_title_parts($title) {
  unset($title['tagline']);
  return $title;
}

add_filter('document_title_parts', 'montheme_document_title_parts');


function register_my_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );


function astral_custom_header_setup() {
$args = array(
'default-image' => get_template_directory_uri() . '/image/imageheader.png',
'width' => 2000,
'height' => 500,
'flex-width' => true,
'flex-height' => true,
);
add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'astral_custom_header_setup' );

function themename_custom_logo_setup() {
$defaults = array(
'height' => 50,
'width' => 50,
'flex-height' => true,
'flex-width' => true,
'header-text' => array( 'site-title', 'site-description' ),
'class' => 'icon-diamond'
);
add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/*function astral_custom_background_cb() {
  $defaults = array(
  'default-color'          => '',
  'default-image'          => get_template_directory_uri() .'/image/interstellar_0.jpg',
  'default-repeat'         => '',
  'default-position-x'     => '',
  'default-attachment'     => '',
  'wp-head-callback'       => '_custom_background_cb',
  'admin-head-callback'    => '',
  'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
}
add_action( 'after_setup_theme', 'astral_custom_background_cb' );*/


register_sidebar( array(
'id' => 'wp-sidebar',
'name' => 'searchbar',
) );
