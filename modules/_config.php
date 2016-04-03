<?php
define('MODULE_PATH', get_template_directory_uri() . '/modules/');

require_once ('blog-post-type.php');
require_once ('archive-menu-support.php');
require_once ('shortcodes.php');

add_filter( 'comments_open', 'my_comments_open', 10, 2 );

function my_comments_open( $open, $post_id ) {

	$post = get_post( $post_id );

	if ( 'blog' == $post->post_type )
		$open = true;

	return $open;
}