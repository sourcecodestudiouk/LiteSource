<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register ACF Blocks

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

      $icon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 94.85 53.05"><defs><style>.cls-1{fill:url(#linear-gradient);}.cls-2{fill:url(#linear-gradient-2);}.cls-3{fill:url(#linear-gradient-3);}</style><linearGradient id="linear-gradient" x1="16.01" x2="16.01" y2="45.19" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffbafa"/><stop offset="0.5" stop-color="#ffbafa"/><stop offset="1" stop-color="#3b027f"/></linearGradient><linearGradient id="linear-gradient-2" x1="78.84" y1="52.96" x2="78.84" y2="7.86" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="22.54" y1="51.42" x2="72.31" y2="1.65" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#3b027f"/><stop offset="1" stop-color="#ffbafa"/></linearGradient></defs><title>SCS-Icon-Grad</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M22.36,43.75l4.11-4.11.05,0L13.39,26.47l17-17a5.55,5.55,0,0,0-7.84-7.85L1.62,22.55h0a5.55,5.55,0,0,0,0,7.84L15.2,44A5.51,5.51,0,0,0,22.36,43.75Z"/><path class="cls-2" d="M80.13,9.48a5.54,5.54,0,0,0-7.64-.17l-4.1,4.1L81.46,26.47l-17,17A5.55,5.55,0,0,0,68.39,53a5.52,5.52,0,0,0,3.92-1.64L93.23,30.4h0a5.56,5.56,0,0,0,0-7.85"/><path class="cls-3" d="M72.31,1.65a5.53,5.53,0,0,0-7.82,0l0,0-.1.1L26.52,39.6l-.05,0-4.11,4.11A5.51,5.51,0,0,1,15.2,44a5.84,5.84,0,0,1-.48-.39l7.82,7.83a5.53,5.53,0,0,0,7.81,0l0,0,38-38h0l4.1-4.1a5.54,5.54,0,0,1,7.64.17Z"/></g></g></svg>';

      $addons = get_field('modular_addons', 'admin-settings');

      if(in_array('events', $addons)){
          acf_register_block_type(array(
            'name'              => 'Events Card Slider',
            'title'             => __('Events Card Slider'),
            'description'       => __('Events card slider block for use within the events addon module.'),
            'render_template'   => 'templates/blocks/events-slider.php',
            'category'          => 'events-module',
            'icon'              => $icon,
            'keywords'          => array( 'events', 'slider' ),
          ));

          acf_register_block_type(array(
            'name'              => 'Events Information',
            'title'             => __('Events Information'),
            'description'       => __('Events information block for use within the events addon module.'),
            'render_template'   => 'templates/blocks/events-information.php',
            'category'          => 'events-module',
            'icon'              => $icon,
            'keywords'          => array( 'events', 'information', 'overview' ),
          ));

          acf_register_block_type(array(
            'name'              => 'Events Calendar',
            'title'             => __('Events Calendar'),
            'description'       => __('Events calendar block for use within the events addon module.'),
            'render_template'   => 'templates/blocks/events-calendar.php',
            'category'          => 'events-module',
            'icon'              => $icon,
            'keywords'          => array( 'events', 'calendar' ),
          ));
        }
        

        // acf_register_block_type(array(
        //     'name'              => 'Contact Form',
        //     'title'             => __('Contact Form'),
        //     'description'       => __('Contact Form Custom Block'),
        //     'render_template'   => 'templates/blocks/contact-form.php',
        //     'category'          => 'custom-layout',
        //     'icon'              => 'screenoptions',
        //     'keywords'          => array( 'contact', 'form', 'content' ),
        // ));

        // acf_register_block_type(array(
        //     'name'              => 'Link Grid',
        //     'title'             => __('Link Grid'),
        //     'description'       => __('Link Grid Custom Block'),
        //     'render_template'   => 'templates/blocks/link-grid.php',
        //     'category'          => 'custom-layout',
        //     'icon'              => 'screenoptions',
        //     'keywords'          => array( 'links', 'grid' ),
        // ));

        // acf_register_block_type(array(
        //     'name'              => 'Latest News',
        //     'title'             => __('Latest News'),
        //     'description'       => __('Latest News Custom Block'),
        //     'render_template'   => 'templates/blocks/latest-news.php',
        //     'category'          => 'custom-layout',
        //     'icon'              => 'widgets',
        //     'keywords'          => array( 'news', 'grid' ),
        // ));

        // acf_register_block_type(array(
        //     'name'              => 'Feature Blocks',
        //     'title'             => __('Feature Blocks'),
        //     'description'       => __('Feature Blocks Custom Block'),
        //     'render_template'   => 'templates/blocks/feature-blocks.php',
        //     'category'          => 'custom-layout',
        //     'icon'              => 'screenoptions',
        //     'keywords'          => array( 'blocks', 'inline' ),
        // ));

        // acf_register_block_type(array(
        //     'name'              => 'Large Text',
        //     'title'             => __('Large Text'),
        //     'description'       => __('Large Text Custom Block'),
        //     'render_template'   => 'templates/blocks/large-text.php',
        //     'category'          => 'custom-layout',
        //     'icon'              => 'screenoptions',
        //     'keywords'          => array( 'large', 'text' ),
        // ));

        // acf_register_block_type(array(
        //     'name'              => 'Stats',
        //     'title'             => __('Stats'),
        //     'description'       => __('Stats Custom Block'),
        //     'render_template'   => 'templates/blocks/stats.php',
        //     'category'          => 'custom-layout',
        //     'icon'              => 'screenoptions',
        //     'keywords'          => array( 'stats' ),
        // ));

        // acf_register_block_type(array(
        //     'name'              => 'Full Width Image',
        //     'title'             => __('Full Width Image'),
        //     'description'       => __('Full Width Image Custom Block'),
        //     'render_template'   => 'templates/blocks/full-width-image.php',
        //     'category'          => 'custom-layout',
        //     'icon'              => 'screenoptions',
        //     'keywords'          => array( 'image', 'full width' ),
        // ));

        acf_register_block_type(array(
          'name'              => 'Page Header',
          'title'             => __('Page Header'),
          'description'       => __('Page Header Block'),
          'render_template'   => 'templates/blocks/page-header.php',
          'category'          => 'custom-layout',
          'icon'              => $icon,
          'keywords'          => array( 'header', 'title', 'page' ),
        ));

        if (is_singular('event')) {
          if(has_block( 'acf/events-information')){
            acf_register_block_type(array(
              'name'              => 'Hero Header',
              'title'             => __('Hero Header'),
              'description'       => __('Hero Header Block'),
              'render_template'   => 'templates/blocks/hero-header.php',
              'category'          => 'custom-layout',
              'icon'              => $icon,
              'keywords'          => array( 'header', 'title', 'hero' ),
          ));
          }
        }

       

        acf_register_block_type(array(
          'name'              => 'Call To Action',
          'title'             => __('Call To Action'),
          'description'       => __('Call to action block as part of the standard system.'),
          'render_template'   => 'templates/blocks/call-to-action.php',
          'category'          => 'call-to-action',
          'icon'              => $icon,
          'keywords'          => array( 'cta', 'divider', 'link' ),
        ));

        acf_register_block_type(array(
          'name'              => 'Content Slider',
          'title'             => __('Content Slider'),
          'description'       => __('content slider block as part of the standard system.'),
          'render_template'   => 'templates/blocks/content-slider.php',
          'category'          => 'content',
          'icon'              => $icon,
          'keywords'          => array( 'content', 'posts', 'slider' ),
        ));
    }
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Add options pages

if( function_exists('acf_add_options_page') ) {
  $args = array(
    'page_title' => 'Site Options',
    'menu_title' => 'Site Options',
    'menu_slug' => 'site-options',
    'capability' => 'edit_posts',
    'position' => false,
    'parent_slug' => '',
    'icon_url' => 'dashicons-menu',
    'redirect' => true,
    'post_id' => 'site-options',
    'autoload' => false,
    'update_button'		=> __('Update', 'acf'),
    'updated_message'	=> __("Options Updated", 'acf'),
  );
  acf_add_options_page( $args );

  $args = array(
    'page_title'  => __('Company Info'),
    'menu_title'  => __('Company Info'),
    'menu_slug' => 'company-info',
    'parent_slug' => 'site-options',
  );
  acf_add_options_sub_page( $args );

  $args = array(
    'page_title'  => __('Branding'),
    'menu_title'  => __('Branding'),
    'menu_slug' => 'branding-options',
    'parent_slug' => 'site-options',
  );
  acf_add_options_sub_page( $args );

  $args = array(
    'page_title'  => __('Header'),
    'menu_title'  => __('Header'),
    'menu_slug' => 'header-layout',
    'parent_slug' => 'site-options',
  );
  acf_add_options_sub_page( $args );

  $args = array(
    'page_title'  => __('Footer'),
    'menu_title'  => __('Footer'),
    'menu_slug' => 'footer-layout',
    'parent_slug' => 'site-options',
  );
  acf_add_options_sub_page( $args );

  $args = array(
    'page_title'  => __('Components'),
    'menu_title'  => __('Components'),
    'menu_slug' => 'components-style',
    'parent_slug' => 'site-options',
  );
  acf_add_options_sub_page( $args );

  $args = array(
    'page_title'  => __('Social Media'),
    'menu_title'  => __('Social Media'),
    'parent_slug' => 'site-options',
  );
  acf_add_options_sub_page( $args );

  $sub = get_field('subscription_status', 'admin-settings');

	if($sub != 'one-page'){
    $args = array(
      'page_title'  => __('Content'),
      'menu_title'  => __('Content'),
      'menu_slug' => 'content-types',
      'parent_slug' => 'site-options',
    );
    acf_add_options_sub_page( $args );
  }

  $args = array(
    'page_title'  => __('Integrations'),
    'menu_title'  => __('Intergrations'),
    'parent_slug' => 'site-options',
  );
  acf_add_options_sub_page( $args );

  if(get_field('maintenance_mode', 'options')){
    $args = array(
      'page_title' => 'Maintenance / Holding Mode',
      'menu_title' => 'Maintenance / Holding Mode',
      'menu_slug' => 'maintenance',
      'capability' => 'edit_posts',
      'position' => false,
      'parent_slug' => '',
    	'icon_url' => false,
      'redirect' => true,
      'post_id' => 'maintenance-mode',
      'autoload' => false,
    	'update_button'		=> __('Update', 'acf'),
      'updated_message'	=> __("Options Updated", 'acf'),
    );
    acf_add_options_page( $args );
  }
  if(is_scs()){
    $args = array(
      'page_title' => 'Admin Settings',
      'menu_title' => 'Admin Settings',
      'menu_slug' => 'admin-settings',
      'capability' => 'edit_posts',
      'position' => false,
      'parent_slug' => '',
    	'icon_url' => 'dashicons-lock',
      'redirect' => true,
      'post_id' => 'admin-settings',
      'autoload' => false,
    	'update_button'		=> __('Update', 'acf'),
      'updated_message'	=> __("Options Updated", 'acf'),
    );
    acf_add_options_page( $args );
  }
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// ACF Map Usage

function my_acf_google_map_api( $api ){
  $key = get_field('google_maps_api_key', 'options');
  $api['key'] = $key;
  $api['key'] = 'AIzaSyDia5ipGECIFAC_xdj6b-OdKm1rNkgfji8';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


?>
