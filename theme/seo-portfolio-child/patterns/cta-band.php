<?php
/**
 * Title: Call to Action Band
 * Slug: seo-portfolio/cta-band
 * Categories: seo-portfolio
 * Description: Dark closing call-to-action band.
 */
$contact = esc_url( home_url( '/contact/' ) );
$blog    = esc_url( home_url( '/blog/' ) );
?>
<!-- wp:group {"align":"full","className":"section section--dark cta-band","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section section--dark cta-band"><!-- wp:group {"className":"cta-band__inner reveal"} -->
<div class="wp-block-group cta-band__inner reveal"><!-- wp:heading -->
<h2 class="wp-block-heading">Need SEO content or a fast, responsive site? Let's talk.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">Research-led articles and clean WordPress builds, planned around what people actually search for.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $contact; ?>">Get in touch</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo $blog; ?>">Read the blog</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
