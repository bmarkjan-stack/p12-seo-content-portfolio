<?php
/**
 * Title: About Bio
 * Slug: seo-portfolio/about-bio
 * Categories: seo-portfolio
 * Description: Short bio with photo and a list of what you do. Replace the placeholder photo (select the image > Replace).
 * Keywords: about, bio, profile
 * Viewport Width: 1400
 */
$photo   = esc_url( get_theme_file_uri( 'assets/images/avatar-placeholder.svg' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>
<!-- wp:group {"align":"full","className":"section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section"><!-- wp:group {"align":"wide","className":"about__grid"} -->
<div class="wp-block-group alignwide about__grid"><!-- wp:image {"sizeSlug":"large","className":"about__photo"} -->
<figure class="wp-block-image size-large about__photo"><img src="<?php echo $photo; ?>" alt="Portrait placeholder: replace with your photo"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"about__copy reveal"} -->
<div class="wp-block-group about__copy reveal"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">About</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">SEO content writer and web developer</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">I combine search research, clear writing and hands-on WordPress and front-end skills, so content is both useful to readers and easy for search engines to understand.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"about__list"} -->
<ul class="wp-block-list about__list"><!-- wp:list-item -->
<li>Search intent and keyword research</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>SEO briefs, outlines and on-page optimization</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>WordPress publishing, internal linking and responsive layouts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Technical writing backed by working code (Flask, REST, JSON)</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $contact; ?>">Contact me</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
