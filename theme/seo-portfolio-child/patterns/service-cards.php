<?php
/**
 * Title: Service Cards
 * Slug: seo-portfolio/service-cards
 * Categories: seo-portfolio
 * Description: Three equal-height cards with icons and bottom-aligned buttons.
 * Keywords: services, cards, features
 * Viewport Width: 1400
 */
$a = esc_url( home_url( '/best-website-features-small-businesses/' ) );
$b = esc_url( home_url( '/how-to-build-a-responsive-website/' ) );
$c = esc_url( home_url( '/rest-api-guide/' ) );
?>
<!-- wp:group {"align":"full","className":"section section--soft","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section section--soft"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"section-head reveal"} -->
<div class="wp-block-group section-head reveal"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">What I cover</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Web Development &amp; SEO Content</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">Technical web development knowledge, combined with clear, useful and search-focused content.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"card-grid"} -->
<div class="wp-block-group card-grid"><!-- wp:group {"className":"card reveal"} -->
<div class="wp-block-group card reveal"><!-- wp:html -->
<div class="card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
<!-- /wp:html -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Web Development</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Practical concepts for building modern websites and web applications.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $a; ?>">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"card reveal"} -->
<div class="wp-block-group card reveal"><!-- wp:html -->
<div class="card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="14" height="11" rx="2"/><rect x="14" y="9" width="8" height="11" rx="2"/></svg></div>
<!-- /wp:html -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Responsive Web Design</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>How sites adapt to any screen size for a better experience on every device.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $b; ?>">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"card reveal"} -->
<div class="wp-block-group card reveal"><!-- wp:html -->
<div class="card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.7 4 3 9 3s9-1.3 9-3V5"/><path d="M3 12c0 1.7 4 3 9 3s9-1.3 9-3"/></svg></div>
<!-- /wp:html -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Technical Topics</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Accessible explanations of APIs, databases and development concepts.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $c; ?>">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
