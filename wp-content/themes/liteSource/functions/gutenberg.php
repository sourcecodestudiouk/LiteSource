<?php

// Add all front-end styles to the back-end editor
add_action( 'after_setup_theme', 'gutenberg_css' );

function gutenberg_css(){
	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
  add_editor_style( '/assets/bootstrap/bootstrap.css' ); // tries to include style-editor.css directly from your theme folder
	add_editor_style( '/assets/style/style.css' ); // tries to include style-editor.css directly from your theme folder
}


// Hide Gutenberg Editor on certain pages.
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;

  // Hide the editor on the page titled 'Homepage'
  $pagename = get_the_title($post_id);
  if($pagename == 'News'){
    remove_post_type_support('page', 'editor');
  }

  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if($template_file == 'my-page-template.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}

// Remove Comments From Menu Section
add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
  remove_menu_page( 'edit-comments.php' );
}

?>
