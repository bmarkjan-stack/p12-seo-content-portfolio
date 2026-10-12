<?php
/**
 * One-time setup: if no post is sticky yet, feature the REST API article so the
 * homepage "Featured Article" section has something to show. You can change the
 * sticky post any time (Post settings > "Stick to the top of the blog").
 */
defined( 'ABSPATH' ) || exit;

add_action( 'init', function () {
	if ( get_option( 'spc_seeded' ) ) {
		return;
	}
	if ( ! get_option( 'sticky_posts' ) ) {
		$post = get_page_by_path( 'rest-api-guide', OBJECT, 'post' );
		if ( $post ) {
			stick_post( $post->ID );
		}
	}
	update_option( 'spc_seeded', 1 );
} );
