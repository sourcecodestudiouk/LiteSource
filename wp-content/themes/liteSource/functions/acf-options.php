<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'Text & Image',
            'title'             => __('Text & Image'),
            'description'       => __('Text & Image Custom Block'),
            'render_template'   => 'templates/blocks/text-image.php',
            'category'          => 'custom-layout',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'text', 'image', 'content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'Contact Form',
            'title'             => __('Contact Form'),
            'description'       => __('Contact Form Custom Block'),
            'render_template'   => 'templates/blocks/contact-form.php',
            'category'          => 'custom-layout',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'contact', 'form', 'content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'Link Grid',
            'title'             => __('Link Grid'),
            'description'       => __('Link Grid Custom Block'),
            'render_template'   => 'templates/blocks/link-grid.php',
            'category'          => 'custom-layout',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'links', 'grid' ),
        ));

        acf_register_block_type(array(
            'name'              => 'Latest News',
            'title'             => __('Latest News'),
            'description'       => __('Latest News Custom Block'),
            'render_template'   => 'templates/blocks/latest-news.php',
            'category'          => 'custom-layout',
            'icon'              => 'widgets',
            'keywords'          => array( 'news', 'grid' ),
        ));

        acf_register_block_type(array(
            'name'              => 'Feature Blocks',
            'title'             => __('Feature Blocks'),
            'description'       => __('Feature Blocks Custom Block'),
            'render_template'   => 'templates/blocks/feature-blocks.php',
            'category'          => 'custom-layout',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'blocks', 'inline' ),
        ));

        acf_register_block_type(array(
            'name'              => 'Large Text',
            'title'             => __('Large Text'),
            'description'       => __('Large Text Custom Block'),
            'render_template'   => 'templates/blocks/large-text.php',
            'category'          => 'custom-layout',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'large', 'text' ),
        ));

        acf_register_block_type(array(
            'name'              => 'Stats',
            'title'             => __('Stats'),
            'description'       => __('Stats Custom Block'),
            'render_template'   => 'templates/blocks/stats.php',
            'category'          => 'custom-layout',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'stats' ),
        ));

        acf_register_block_type(array(
            'name'              => 'Full Width Image',
            'title'             => __('Full Width Image'),
            'description'       => __('Full Width Image Custom Block'),
            'render_template'   => 'templates/blocks/full-width-image.php',
            'category'          => 'custom-layout',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'image', 'full width' ),
        ));

        acf_register_block_type(array(
            'name'              => 'Page Header',
            'title'             => __('Page Header'),
            'description'       => __('Page Header Custom Block'),
            'render_template'   => 'templates/blocks/page-header.php',
            'category'          => 'custom-layout',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'header', 'title' ),
        ));
    }
}

// Options Page - Have to be after above statement as function won't exist.
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
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
// CONTENT BLOCKS - ONLY USE THE ONES YOU WANT.

?>
