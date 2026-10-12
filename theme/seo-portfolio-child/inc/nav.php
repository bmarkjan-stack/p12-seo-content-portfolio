<?php
/**
 * Turns the "Contact" menu item into a filled button (adds .is-cta to its <li>).
 * Works for custom links and page links; no editor step needed.
 */
defined( 'ABSPATH' ) || exit;

add_filter( 'render_block_core/navigation-link', function ( $content, $block ) {
	$attrs = $block->parsed_block['attrs'] ?? array();
	$label = isset( $attrs['label'] ) ? trim( wp_strip_all_tags( $attrs['label'] ) ) : '';
	$url   = $attrs['url'] ?? '';
	if ( 0 !== strcasecmp( $label, 'Contact' ) && false === stripos( $url, '/contact' ) ) {
		return $content;
	}
	$p = new WP_HTML_Tag_Processor( $content );
	if ( $p->next_tag( 'li' ) ) {
		$p->add_class( 'is-cta' );
	}
	return $p->get_updated_html();
}, 10, 2 );
