<?php
/**
 * Styles and scripts. Component CSS partials are concatenated, lightly
 * minified and printed inline in one <style> (one request, no render-blocking file).
 */
defined( 'ABSPATH' ) || exit;

function spc_css_parts() {
    return array( 'base', 'theme-mode', 'header', 'hero', 'cards', 'featured', 'blog', 'pages', 'footer', 'motion' );
}


function spc_collect_css( $skip = array() ) {
    $css = '';

    foreach ( spc_css_parts() as $part ) {
        if ( in_array( $part, $skip, true ) ) {
            continue;
        }

        $file = get_theme_file_path( "assets/css/{$part}.css" );

        if ( is_readable( $file ) ) {
            $css .= file_get_contents( $file ) . "\n";
        }
    }
    $css = preg_replace( '!/\*.*?\*/!s', '', $css );
    return trim( preg_replace( '/\s+/', ' ', $css ) );
}

add_action( 'wp_head', function () {
	echo "<script>document.documentElement.classList.add('js');</script>\n";
}, 1 );

add_action( 'wp_enqueue_scripts', function () {
	$ver = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'spc-style', get_stylesheet_uri(), array(), $ver );
	wp_add_inline_style( 'spc-style', spc_collect_css() );

	$article = get_theme_file_path( 'assets/css/article.css' );
	if ( is_singular() && is_readable( $article ) ) {
		wp_enqueue_style( 'spc-article', get_theme_file_uri( 'assets/css/article.css' ), array( 'spc-style' ), filemtime( $article ) );
	}

	foreach ( array( 'header', 'reveal' ) as $script ) {
		$path = get_theme_file_path( "assets/js/{$script}.js" );
		if ( is_readable( $path ) ) {
			wp_enqueue_script( "spc-{$script}", get_theme_file_uri( "assets/js/{$script}.js" ), array(), filemtime( $path ), array( 'strategy' => 'defer', 'in_footer' => true ) );
		}
	}
} );

/* Same CSS inside the block editor so it matches the front end. */
add_filter( 'block_editor_settings_all', function ( $settings ) {
	$css = spc_collect_css( array( 'theme-mode' ) );
	if ( $css ) {
		$settings['styles'][] = array( 'css' => $css );
	}
	return $settings;
} );
