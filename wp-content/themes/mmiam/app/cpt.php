<?php

namespace App;

// Register Custom Post Type
add_action( 'init', function() {

	$labels = array(
		'name'                  => _x( 'Courses', 'Post Type General Name', 'mmiam' ),
		'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'mmiam' ),
		'menu_name'             => __( 'Courses', 'mmiam' ),
	);
	
	$args = array(
		'label'                 => __( 'Course', 'mmiam' ),
		'description'           => __( 'MMIAM Courses', 'mmiam' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions' ),
		'taxonomies'            => array( 'course_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	
	register_post_type( 'course', $args );

});

// Register Custom Taxonomy
add_action( 'init', function() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'mmiam' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'mmiam' ),
		'menu_name'                  => __( 'Categories', 'mmiam' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);

	register_taxonomy( 'course_taxonomy', array( 'course' ), $args );

});