<?php
/*
 *  Author: Connor Banks | https://www.connorbanks.co.uk
 *  URL: https://www.connorbanks.co.uk | @connorbanks94
 *  Custom functions, support, custom post types and more.
 */


function is_scs(){
  $current_user = wp_get_current_user();
  if($current_user->user_email == 'admin@sourcecodestudio.co.uk'){
   return true;
 }
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Standard Theme Support
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (function_exists('add_theme_support')){
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Loaded Header Scripts
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function header_scripts() {
if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    wp_register_script('conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
    wp_enqueue_script('conditionizr');

    // Modernizr JS - Always Needed.
    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
    wp_enqueue_script('modernizr');

    // Developer created JS - Always Needed.
    wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('scripts');

    // Bootstrap JS - Comment out if not needed.
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('bootstrap');

    // Slick JS - Comment out if not needed.
    wp_register_script('slick', get_template_directory_uri() . '/assets/slick/slick.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('slick');
  }
}
add_action('init', 'header_scripts');


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Loaded Stylesheets
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function styles(){
    // Theme Standard Styling
    wp_register_style('style', get_template_directory_uri() . '/assets/style/style.css', array(), '1.0', 'all');
    wp_enqueue_style('style');

    // Bootstrap CSS - Comment out if not needed.
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'styles');


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// WP Menu Navigations
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register HTML5 Blank Navigation
function register_menu() {
  register_nav_menus(array( // Using array to specify more menus if needed
    'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
    'footer-menu-1' => __('Footer Menu One', 'html5blank'), // Extra Navigation if needed (duplicate as many as you need!)
    'footer-menu-2' => __('Footer Menu Two', 'html5blank'), // Extra Navigation if needed (duplicate as many as you need!)
    'footer-menu-3' => __('Footer Menu Three', 'html5blank'), // Extra Navigation if needed (duplicate as many as you need!)
    'mobile-menu' => __('Mobile Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
  ));
}
add_action('init', 'register_menu'); // Add Menus


include_once( get_template_directory() . '/functions/navigation/header-nav.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Misc Functions
include_once( get_template_directory() . '/functions/misc.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Misc Functions
include_once( get_template_directory() . '/functions/components.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Gutenberg Functions
include_once( get_template_directory() . '/functions/gutenberg.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Advanced Custom Fields Functions
include_once( get_template_directory() . '/functions/acf-options.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Maintenance / Holding Mode Feature
include_once( get_template_directory() . '/functions/maintenance.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Share Buttons
include_once( get_template_directory() . '/functions/share-buttons.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// User Permissions
include_once( get_template_directory() . '/functions/permissions.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Login Styling
include_once( get_template_directory() . '/functions/login-style.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// WordPress Dashboard
include_once( get_template_directory() . '/functions/dashboard.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Post Types
include_once( get_template_directory() . '/functions/post-types.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Admin Notices
include_once( get_template_directory() . '/functions/admin-notices.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Automatic Templates Content
include_once( get_template_directory() . '/functions/template-content.php' );



?>
