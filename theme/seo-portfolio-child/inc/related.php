
<?php
/**
 * "Keep reading" on single posts: the Query Loop with queryId 21 (see
 * templates/single.html) skips the post being viewed.
 */

defined( 'ABSPATH' ) || exit;

add_filter( 'query_loop_block_query_vars', function ( $query, $block ) {
	$attrs = $block->parsed_block['attrs'] ?? array();

	if ( isset( $attrs['queryId'] ) && 21 === (int) $attrs['queryId'] && is_singular( 'post' ) ) {
		$query['post__not_in'] = array( get_the_ID() );
	}

	return $query;
}, 10, 2 );
