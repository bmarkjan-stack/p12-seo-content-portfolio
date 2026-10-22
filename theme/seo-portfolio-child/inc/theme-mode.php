<?php
/**
 * Dark mode by default, with a visitor-chosen light mode.
 *
 * Sets data-theme on the html element before the first paint
 * and prints the binary wave canvas at the end of the page.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_head', function () {
    ?>
    <script>
    (function () {
        var theme = 'dark';

        try {
            var savedTheme = localStorage.getItem('spc-theme');

            if (savedTheme === 'light' || savedTheme === 'dark') {
                theme = savedTheme;
            }
        } catch (error) {
            // Keep the default dark theme if storage is unavailable.
        }

        document.documentElement.setAttribute('data-theme', theme);
    })();
    </script>
    <?php
}, 0 );

add_action( 'wp_footer', function () {
    echo '<canvas id="binary-wave" aria-hidden="true"></canvas>' . "\n";
} );