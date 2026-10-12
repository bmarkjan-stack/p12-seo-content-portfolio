<?php
defined( 'ABSPATH' ) || exit;

add_action( 'init', function () {
	register_block_pattern_category( 'seo-portfolio', array( 'label' => __( 'SEO Portfolio', 'seo-portfolio-child' ) ) );
} );
