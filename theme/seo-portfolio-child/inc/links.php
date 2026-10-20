
<?php
/**
 * Article links resolve from the published post, so a card or footer link
 * never points at a URL that does not exist. If the article is missing or
 * still a draft, the link falls back to the blog index.
 */

defined( 'ABSPATH' ) || exit;

function spc_article_url( $slug ) {
	$query = new WP_Query( array(
		'name'                => $slug,
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'posts_per_page'      => 1,
		'no_found_rows'       => true,
		'ignore_sticky_posts' => true,
	) );

	if ( $query->have_posts() ) {
		return get_permalink( $query->posts[0] );
	}

	return home_url( '/blog/' );
}
