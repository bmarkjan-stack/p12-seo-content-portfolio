<?php
/**
 * Title: Featured Article
 * Slug: seo-portfolio/featured-post
 * Categories: seo-portfolio
 * Description: Large featured card that shows the sticky post (Post settings > "Stick to the top of the blog").
 * Keywords: featured, post, article
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"section featured","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section featured"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"section-head reveal"} -->
<div class="wp-block-group section-head reveal"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Featured article</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Start here</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"featured-card reveal"} -->
<div class="wp-block-group featured-card reveal"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"className":"featured-card__body"} -->
<div class="wp-block-group featured-card__body"><!-- wp:group {"className":"post-card__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group post-card__meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":32} /-->

<!-- wp:read-more {"content":"Read article"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
