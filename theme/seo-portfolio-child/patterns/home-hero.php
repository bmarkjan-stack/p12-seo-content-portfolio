<?php
/**
 * Title: Home Hero
 * Slug: seo-portfolio/home-hero
 * Categories: seo-portfolio
 * Description: Two-column hero with headline, two buttons, proof points and a visual. Contains the page's only H1.
 * Keywords: hero, home, intro
 * Viewport Width: 1400
 */
$blog     = esc_url( home_url( '/blog/' ) );
$projects = esc_url( home_url( '/services/' ) );
$img      = esc_url( get_theme_file_uri( 'assets/images/hero-mockup.svg' ) );
?>
<!-- wp:group {"align":"full","className":"section hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section hero"><!-- wp:group {"align":"wide","className":"hero__grid"} -->
<div class="wp-block-group alignwide hero__grid"><!-- wp:group {"className":"hero__copy"} -->
<div class="wp-block-group hero__copy"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">SEO content · Web development</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero__title"} -->
<h1 class="wp-block-heading hero__title">SEO content &amp; web development, <mark class="hl">built to be found</mark>.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">Practical articles and web development projects covering responsive design, website development and modern web technologies.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $blog; ?>">Read the Blog</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo $projects; ?>">View Projects</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"hero__proof","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hero__proof"><!-- wp:paragraph {"className":"proof"} -->
<p class="proof"><strong>3</strong> SEO articles</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"proof"} -->
<p class="proof"><strong>3</strong> content types</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"proof"} -->
<p class="proof"><strong>1</strong> Flask REST API demo</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<figure class="hero__visual"><img src="<?php echo $img; ?>" width="1200" height="900" alt="Browser mockup showing REST API, responsive design and SEO articles" loading="eager" fetchpriority="high" decoding="async"></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
