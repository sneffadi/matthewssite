<?php
/*=============================================
=          Create Product Post Type           =
=============================================*/
function blog_post_type() {
	register_taxonomy_for_object_type('category', 'Blog');
	register_post_type('Blog',
		array(
			'labels' => array(
				'name'               => __('Blog', 'Blog'),
				'singular_name'      => __('Blog', 'Blog'),
				'add_new'            => __('Add New', 'Blog'),
				'add_new_item'       => __('Add New Blog Post', 'Blog'),
				'edit'               => __('Edit', 'Blog'),
				'edit_item'          => __('Edit Blog Post', 'Blog'),
				'new_item'           => __('New Blog Post', 'Blog'),
				'view'               => __('View Blog Post', 'Blog'),
				'view_item'          => __('View Blog Post', 'Blog'),
				'search_items'       => __('Search Blog Posts', 'Blog'),
				'not_found'          => __('No Blog Posts found', 'Blog'),
				'not_found_in_trash' => __('No Blog Posts found in Trash', 'Blog'),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title', 
				'editor',
				'thumbnail',
				'comments'
			),
			'can_export' => true,
			'taxonomies' => array(
				'category',
			),
			'menu_icon'         => 'dashicons-welcome-write-blog',
			'capability_type'   => 'post',
			'show_in_nav_menus' => true,
		));
}
add_action('init', 'blog_post_type');