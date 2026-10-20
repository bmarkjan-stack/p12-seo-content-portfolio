<?php
/**
 * Title: Selected Work (case studies)
 * Slug: seo-portfolio/case-studies
 * Categories: seo-portfolio
 * Description: Three case-study cards built from the real project documentation. Replace/extend with client results when you have them.
 * Keywords: portfolio, case study, work
 * Viewport Width: 1400
 */
$s1 = esc_url( spc_article_url( 'how-to-build-a-responsive-website' ) );
$s2 = esc_url( spc_article_url( 'best-website-features-for-small-businesses' ) );
$s3 = esc_url( spc_article_url( 'rest-api-guide' ) );
?>
<!-- wp:group {"align":"full","className":"section section--soft","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section section--soft"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"section-head reveal"} -->
<div class="wp-block-group section-head reveal"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Selected work</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Three articles, three search intents</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">Each sample follows the same documented workflow: search intent, keywords, outline, SEO brief, metadata, draft and WordPress publishing.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"card-grid"} -->
<div class="wp-block-group card-grid"><!-- wp:group {"className":"card reveal"} -->
<div class="wp-block-group card reveal"><!-- wp:paragraph {"className":"case__tag"} -->
<p class="case__tag">Informational</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">How to Build a Responsive Website</h3>
<!-- /wp:heading -->

<!-- wp:html -->
<ul class="case__facts"><li><strong>Primary keyword:</strong> responsive website</li><li><strong>Length:</strong> about 700 words</li><li><strong>Deliverables:</strong> intent, keywords, outline, brief, metadata</li></ul>
<!-- /wp:html -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $s1; ?>">Read article</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"card reveal"} -->
<div class="wp-block-group card reveal"><!-- wp:paragraph {"className":"case__tag"} -->
<p class="case__tag">Commercial</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Best Website Features for Small Businesses</h3>
<!-- /wp:heading -->

<!-- wp:html -->
<ul class="case__facts"><li><strong>Primary keyword:</strong> best website features for small businesses</li><li><strong>Length:</strong> about 2,200 words</li><li><strong>Format:</strong> comparison table, structured recommendations</li></ul>
<!-- /wp:html -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $s2; ?>">Read article</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"card reveal"} -->
<div class="wp-block-group card reveal"><!-- wp:paragraph {"className":"case__tag"} -->
<p class="case__tag">Technical</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">What Is a REST API and How Does It Work?</h3>
<!-- /wp:heading -->

<!-- wp:html -->
<ul class="case__facts"><li><strong>Primary keyword:</strong> REST API</li><li><strong>Length:</strong> about 900 words</li><li><strong>Extras:</strong> Flask demo API, 7 request screenshots, flow diagram</li></ul>
<!-- /wp:html -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $s3; ?>">Read article</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
