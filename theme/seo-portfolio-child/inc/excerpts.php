
<?php
/**
 * Blog index and archives always show excerpts, never the full post.
 *
 * This also protects listing cards if a Site Editor override
 * puts a Post Content block back into a blog template.
 * Single posts and pages remain unchanged.
 */
defined( 'ABSPATH' ) || exit;

/**
 * Set excerpt length for the blog index and archive listings.
 */
add_filter( 'excerpt_length', function ( $length ) {
    return ( is_home() || is_archive() ) ? 22 : $length;
} );

/**
 * Replace Post Content blocks with excerpts outside singular pages
 * and the WordPress admin.
 */
add_filter( 'render_block_core/post-content', function ( $content, $block ) {
    if ( is_singular() || is_admin() ) {
        return $content;
    }

    $post_id = isset( $block->context['postId'] )
        ? (int) $block->context['postId']
        : get_the_ID();

    $post = get_post( $post_id );

    if ( ! $post ) {
        return $content;
    }

    return '<div class="wp-block-post-excerpt post-card__excerpt"><p>'
        . esc_html( get_the_excerpt( $post ) )
        . '</p></div>';
}, 10, 2 );
