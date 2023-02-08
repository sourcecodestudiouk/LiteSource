<?php
function scs_post_types() {

	$sub = get_field('subscription_status', 'admin-settings');
	$postTypes = get_field('post_types', 'options');

	if($sub != 'one-page'){

		////////////////////////////////////////////////////////////////////////////////
		// Testimonials Post Type
		$labels = [
			"name" => __( "Testimonials", "sourcecodestudio-starter" ),
			"singular_name" => __( "Testimonial", "sourcecodestudio-starter" ),
			"menu_name" => __( "Testimonials", "sourcecodestudio-starter" ),
			"all_items" => __( "All Testimonials", "sourcecodestudio-starter" ),
			"add_new" => __( "Add new", "sourcecodestudio-starter" ),
			"add_new_item" => __( "Add new Testimonial", "sourcecodestudio-starter" ),
			"edit_item" => __( "Edit Testimonial", "sourcecodestudio-starter" ),
			"new_item" => __( "New Testimonial", "sourcecodestudio-starter" ),
			"view_item" => __( "View Testimonial", "sourcecodestudio-starter" ),
			"view_items" => __( "View Testimonials", "sourcecodestudio-starter" ),
			"search_items" => __( "Search Testimonials", "sourcecodestudio-starter" ),
			"not_found" => __( "No Testimonials found", "sourcecodestudio-starter" ),
			"not_found_in_trash" => __( "No Testimonials found in trash", "sourcecodestudio-starter" ),
			"parent" => __( "Parent Testimonial:", "sourcecodestudio-starter" ),
			"featured_image" => __( "Featured image for this Testimonial", "sourcecodestudio-starter" ),
			"set_featured_image" => __( "Set featured image for this Testimonial", "sourcecodestudio-starter" ),
			"remove_featured_image" => __( "Remove featured image for this Testimonial", "sourcecodestudio-starter" ),
			"use_featured_image" => __( "Use as featured image for this Testimonial", "sourcecodestudio-starter" ),
			"archives" => __( "Testimonial archives", "sourcecodestudio-starter" ),
			"insert_into_item" => __( "Insert into Testimonial", "sourcecodestudio-starter" ),
			"uploaded_to_this_item" => __( "Upload to this Testimonial", "sourcecodestudio-starter" ),
			"filter_items_list" => __( "Filter Testimonials list", "sourcecodestudio-starter" ),
			"items_list_navigation" => __( "Testimonials list navigation", "sourcecodestudio-starter" ),
			"items_list" => __( "Testimonials list", "sourcecodestudio-starter" ),
			"attributes" => __( "Testimonials attributes", "sourcecodestudio-starter" ),
			"name_admin_bar" => __( "Testimonial", "sourcecodestudio-starter" ),
			"item_published" => __( "Testimonial published", "sourcecodestudio-starter" ),
			"item_published_privately" => __( "Testimonial published privately.", "sourcecodestudio-starter" ),
			"item_reverted_to_draft" => __( "Testimonial reverted to draft.", "sourcecodestudio-starter" ),
			"item_scheduled" => __( "Testimonial scheduled", "sourcecodestudio-starter" ),
			"item_updated" => __( "Testimonial updated.", "sourcecodestudio-starter" ),
			"parent_item_colon" => __( "Parent Testimonial:", "sourcecodestudio-starter" ),
		];
		$args = [
			"label" => __( "Testimonials", "sourcecodestudio-starter" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
			"query_var" => true,
			"menu_icon" => "dashicons-format-quote",
			"supports" => [ "title" ],
		];

		if(in_array('testimonials', $postTypes)){
			register_post_type( "testimonial", $args );
		}
		////////////////////////////////////////////////////////////////////////////////
		// Team Members Post Type

		$labels = [
			"name" => __( "Team Members", "sourcecodestudio-starter" ),
			"singular_name" => __( "Team Member", "sourcecodestudio-starter" ),
			"menu_name" => __( "Team Members", "sourcecodestudio-starter" ),
			"all_items" => __( "All Team Members", "sourcecodestudio-starter" ),
			"add_new" => __( "Add new", "sourcecodestudio-starter" ),
			"add_new_item" => __( "Add new Team Member", "sourcecodestudio-starter" ),
			"edit_item" => __( "Edit Team Member", "sourcecodestudio-starter" ),
			"new_item" => __( "New Team Member", "sourcecodestudio-starter" ),
			"view_item" => __( "View Team Member", "sourcecodestudio-starter" ),
			"view_items" => __( "View Team Members", "sourcecodestudio-starter" ),
			"search_items" => __( "Search Team Members", "sourcecodestudio-starter" ),
			"not_found" => __( "No Team Members found", "sourcecodestudio-starter" ),
			"not_found_in_trash" => __( "No Team Members found in trash", "sourcecodestudio-starter" ),
			"parent" => __( "Parent Team Member:", "sourcecodestudio-starter" ),
			"featured_image" => __( "Featured image for this Team Member", "sourcecodestudio-starter" ),
			"set_featured_image" => __( "Set featured image for this Team Member", "sourcecodestudio-starter" ),
			"remove_featured_image" => __( "Remove featured image for this Team Member", "sourcecodestudio-starter" ),
			"use_featured_image" => __( "Use as featured image for this Team Member", "sourcecodestudio-starter" ),
			"archives" => __( "Team Member archives", "sourcecodestudio-starter" ),
			"insert_into_item" => __( "Insert into Team Member", "sourcecodestudio-starter" ),
			"uploaded_to_this_item" => __( "Upload to this Team Member", "sourcecodestudio-starter" ),
			"filter_items_list" => __( "Filter Team Members list", "sourcecodestudio-starter" ),
			"items_list_navigation" => __( "Team Members list navigation", "sourcecodestudio-starter" ),
			"items_list" => __( "Team Members list", "sourcecodestudio-starter" ),
			"attributes" => __( "Team Members attributes", "sourcecodestudio-starter" ),
			"name_admin_bar" => __( "Team Member", "sourcecodestudio-starter" ),
			"item_published" => __( "Team Member published", "sourcecodestudio-starter" ),
			"item_published_privately" => __( "Team Member published privately.", "sourcecodestudio-starter" ),
			"item_reverted_to_draft" => __( "Team Member reverted to draft.", "sourcecodestudio-starter" ),
			"item_scheduled" => __( "Team Member scheduled", "sourcecodestudio-starter" ),
			"item_updated" => __( "Team Member updated.", "sourcecodestudio-starter" ),
			"parent_item_colon" => __( "Parent Team Member:", "sourcecodestudio-starter" ),
		];

		$args = [
			"label" => __( "Team Members", "sourcecodestudio-starter" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"can_export" => false,
			"rewrite" => [ "slug" => "team-member", "with_front" => true ],
			"query_var" => true,
			"menu_icon" => "dashicons-admin-users",
			"supports" => [ "title" ],
			"show_in_graphql" => false,
		];

		if(in_array('team', $postTypes)){
			register_post_type( "team_member", $args );
		}


		////////////////////////////////////////////////////////////////////////////////
		// Services Post Type

		$labels = [
			"name" => __( "Services", "sourcecodestudio-starter" ),
			"singular_name" => __( "Service", "sourcecodestudio-starter" ),
			"menu_name" => __( "Services", "sourcecodestudio-starter" ),
			"all_items" => __( "All Services", "sourcecodestudio-starter" ),
			"add_new" => __( "Add new", "sourcecodestudio-starter" ),
			"add_new_item" => __( "Add new Service", "sourcecodestudio-starter" ),
			"edit_item" => __( "Edit Service", "sourcecodestudio-starter" ),
			"new_item" => __( "New Service", "sourcecodestudio-starter" ),
			"view_item" => __( "View Service", "sourcecodestudio-starter" ),
			"view_items" => __( "View Services", "sourcecodestudio-starter" ),
			"search_items" => __( "Search Services", "sourcecodestudio-starter" ),
			"not_found" => __( "No Services found", "sourcecodestudio-starter" ),
			"not_found_in_trash" => __( "No Services found in trash", "sourcecodestudio-starter" ),
			"parent" => __( "Parent Service:", "sourcecodestudio-starter" ),
			"featured_image" => __( "Featured image for this Service", "sourcecodestudio-starter" ),
			"set_featured_image" => __( "Set featured image for this Service", "sourcecodestudio-starter" ),
			"remove_featured_image" => __( "Remove featured image for this Service", "sourcecodestudio-starter" ),
			"use_featured_image" => __( "Use as featured image for this Service", "sourcecodestudio-starter" ),
			"archives" => __( "Service archives", "sourcecodestudio-starter" ),
			"insert_into_item" => __( "Insert into Service", "sourcecodestudio-starter" ),
			"uploaded_to_this_item" => __( "Upload to this Service", "sourcecodestudio-starter" ),
			"filter_items_list" => __( "Filter Services list", "sourcecodestudio-starter" ),
			"items_list_navigation" => __( "Services list navigation", "sourcecodestudio-starter" ),
			"items_list" => __( "Services list", "sourcecodestudio-starter" ),
			"attributes" => __( "Services attributes", "sourcecodestudio-starter" ),
			"name_admin_bar" => __( "Service", "sourcecodestudio-starter" ),
			"item_published" => __( "Service published", "sourcecodestudio-starter" ),
			"item_published_privately" => __( "Service published privately.", "sourcecodestudio-starter" ),
			"item_reverted_to_draft" => __( "Service reverted to draft.", "sourcecodestudio-starter" ),
			"item_scheduled" => __( "Service scheduled", "sourcecodestudio-starter" ),
			"item_updated" => __( "Service updated.", "sourcecodestudio-starter" ),
			"parent_item_colon" => __( "Parent Service:", "sourcecodestudio-starter" ),
		];

		$args = [
			"label" => __( "Services", "sourcecodestudio-starter" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"can_export" => false,
			"rewrite" => [ "slug" => "service", "with_front" => true ],
			"query_var" => true,
			"menu_icon" => "dashicons-admin-tools",
			"supports" => [ "title", "editor", "thumbnail" ],
			"show_in_graphql" => false,
		];

		if(in_array('services', $postTypes)){
			register_post_type( "service", $args );
		}


		$labels = [
			"name" => __( "Projects", "sourcecodestudio-starter" ),
			"singular_name" => __( "Project", "sourcecodestudio-starter" ),
			"menu_name" => __( "Projects", "sourcecodestudio-starter" ),
			"all_items" => __( "All Projects", "sourcecodestudio-starter" ),
			"add_new" => __( "Add new", "sourcecodestudio-starter" ),
			"add_new_item" => __( "Add new Project", "sourcecodestudio-starter" ),
			"edit_item" => __( "Edit Project", "sourcecodestudio-starter" ),
			"new_item" => __( "New Project", "sourcecodestudio-starter" ),
			"view_item" => __( "View Project", "sourcecodestudio-starter" ),
			"view_items" => __( "View Projects", "sourcecodestudio-starter" ),
			"search_items" => __( "Search Projects", "sourcecodestudio-starter" ),
			"not_found" => __( "No Projects found", "sourcecodestudio-starter" ),
			"not_found_in_trash" => __( "No Projects found in trash", "sourcecodestudio-starter" ),
			"parent" => __( "Parent Project:", "sourcecodestudio-starter" ),
			"featured_image" => __( "Featured image for this Project", "sourcecodestudio-starter" ),
			"set_featured_image" => __( "Set featured image for this Project", "sourcecodestudio-starter" ),
			"remove_featured_image" => __( "Remove featured image for this Project", "sourcecodestudio-starter" ),
			"use_featured_image" => __( "Use as featured image for this Project", "sourcecodestudio-starter" ),
			"archives" => __( "Project archives", "sourcecodestudio-starter" ),
			"insert_into_item" => __( "Insert into Project", "sourcecodestudio-starter" ),
			"uploaded_to_this_item" => __( "Upload to this Project", "sourcecodestudio-starter" ),
			"filter_items_list" => __( "Filter Projects list", "sourcecodestudio-starter" ),
			"items_list_navigation" => __( "Projects list navigation", "sourcecodestudio-starter" ),
			"items_list" => __( "Projects list", "sourcecodestudio-starter" ),
			"attributes" => __( "Projects attributes", "sourcecodestudio-starter" ),
			"name_admin_bar" => __( "Project", "sourcecodestudio-starter" ),
			"item_published" => __( "Project published", "sourcecodestudio-starter" ),
			"item_published_privately" => __( "Project published privately.", "sourcecodestudio-starter" ),
			"item_reverted_to_draft" => __( "Project reverted to draft.", "sourcecodestudio-starter" ),
			"item_scheduled" => __( "Project scheduled", "sourcecodestudio-starter" ),
			"item_updated" => __( "Project updated.", "sourcecodestudio-starter" ),
			"parent_item_colon" => __( "Parent Project:", "sourcecodestudio-starter" ),
		];

		$args = [
			"label" => __( "Projects", "sourcecodestudio-starter" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"can_export" => false,
			"rewrite" => [ "slug" => "project", "with_front" => true ],
			"query_var" => true,
			"menu_icon" => "dashicons-welcome-view-site",
			"supports" => [ "title", "editor", "thumbnail" ],
			"show_in_graphql" => false,
		];

		if(in_array('projects', $postTypes)){
			register_post_type( "project", $args );
		}

	}
}

add_action( 'init', 'scs_post_types');
?>
