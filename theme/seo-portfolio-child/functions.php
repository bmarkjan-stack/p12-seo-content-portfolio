<?php
/**
 * SEO Portfolio Child: bootstrap.
 * Each feature lives in inc/ so it can be committed and reviewed on its own.
 */
defined( 'ABSPATH' ) || exit;

foreach ( array( 'enqueue', 'patterns', 'nav', 'seed' ) as $spc_module ) {
	$spc_file = get_theme_file_path( "inc/{$spc_module}.php" );
	if ( is_readable( $spc_file ) ) {
		require_once $spc_file;
	}
}
