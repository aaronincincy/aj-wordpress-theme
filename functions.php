<?php

function aj_theme_support(){
	add_theme_support( 'post-thumbnails', array('project') );
		set_post_thumbnail_size( 50, 50 );
	add_image_size( 'single-project-thumbnail', 540, 274, true );
}
aj_theme_support();
function aj_init(){
	aj_setup_post_types();
	aj_setup_taxonomies();
	aj_remove_thematic_actions();
}
add_action("init", "aj_init");

function aj_remove_thematic_actions(){
	remove_action('thematic_header', 'thematic_access', 9);
}
function aj_empty(){
	return '';
}
add_filter('thematic_postfooter_postcategory', 'aj_empty');
add_filter('thematic_postfooter_postcomments', 'aj_empty');
add_action('thematic_header', 'thematic_access', 2);
function aj_setup_post_types(){
	register_post_type('project', array(
		
		
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'portfolio',
		),
		'query_var' => false,
		'supports' => array('title', 'thumbnail', 'custom-fields', 'author', 'editor'),
		'labels' => array(
			'name' => __('Projects'),
			'singular_name' => __('Project'),
			'add_new' => __('New Project'),
			'add_new_item' => __('Add New Project'),
			'edit_item' => __('Edit Project'),
			'new_item' => __('New Project'),
			'view_item' => __('View Project'),
			'search_items' => __('Search Projects'),
			'not_found' => __('No projects found'),
			'not_found_in_trash' => __('No projects found in Trash'),
			'menu_name' => __('Projects'),
		),
	));
}
function aj_setup_taxonomies(){
	register_taxonomy(
		'client',
		'project',
		array(
			'hierarchical' => true,
			'label' => __('Client'),
			'sort' => true,
			'args' => array('orderby' => 'term_order'),
			'rewrite' => array('slug' => 'client')
		)
	);
	register_taxonomy(
		'employer',
		'project',
		array(
			'hierarchical' => true,
			'label' => __('Employer'),
			'sort' => true,
			'args' => array('orderby' => 'term_order'),
			'rewrite' => array('slug' => 'employer')
		)
	);
	register_taxonomy(
		'skills',
		'project',
		array(
			'hierarchical' => true,
			'label' => __('Skills'),
			'sort' => true,
			'args' => array('orderby' => 'term_order'),
			'rewrite' => array('slug' => 'skills')
		)
	);
}
?>
