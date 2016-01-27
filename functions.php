<?php
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

function fol_excerpt_length( $length ) {
  return 16;
}
add_filter('excerpt_length', 'fol_excerpt_length', 999);
function register_theme_menus() {
  register_nav_menus(
    array (
      'primary-menu' => _('Primary Menu')
    )
  );
}

add_action( 'init', 'register_theme_menus' );

function fol_theme_styles() {

  //lets us link to styles sheets. Param 1 is a unique name or handle to identify stylesheet param 2 is link to the file
  wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css');
  // wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic)');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}

add_action ( 'wp_enqueue_scripts', 'fol_theme_styles' );

function fol_theme_js() {
  //order these appear here is the order they will appear on the front end

  //additional params are dependents, specific verion, boolean appear in footer? false is not in footer
  wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);

  wp_enqueue_script('foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true);


    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);
}
add_action( 'wp_enqueue_scripts', 'fol_theme_js' );
?>
