<?php
$addons = get_field('modular_addons', 'admin-settings');

function my_add_template_to_posts() {
	$post_type_object = get_post_type_object( 'event' );
	$post_type_object->template = array(
		array( 'acf/events-information' ),
	);
	//$post_type_object->template_lock = 'all';
}


if(in_array('events', $addons)){
    add_action( 'init', 'my_add_template_to_posts' );
}

?>