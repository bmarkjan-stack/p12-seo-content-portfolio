
<?php
/**
 * Title: Services Detail
 * Slug: seo-portfolio/services-detail
 * Categories: seo-portfolio
 * Description: Three grouped cards describing SEO content, on-page SEO, and WordPress and web services.
 * Keywords: services, SEO writing, keyword research, WordPress
 * Viewport Width: 1400
 */
$contact = esc_url( home_url( '/contact/' ) );
?>

<!-- wp:group {"align":"full","className":"section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section">

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"className":"card-grid services-grid","layout":{"type":"grid","columnCount":3}} -->
		<div class="wp-block-group card-grid services-grid">

			<!-- wp:group {"className":"card reveal","layout":{"type":"constrained"}} -->
			<div class="wp-block-group card reveal">

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">SEO content</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Plan and create useful content that addresses audience needs and search intent.</p>
				<!-- /wp:paragraph -->

				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item -->
					<li>SEO content writing</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Keyword research</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Search intent analysis</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"card reveal","layout":{"type":"constrained"}} -->
			<div class="wp-block-group card reveal">

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">On-page SEO</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Structure content for clarity, readability and discoverability by search engines.</p>
				<!-- /wp:paragraph -->

				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item -->
					<li>SEO content structure</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>On-page SEO</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Natural keyword integration</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"card reveal","layout":{"type":"constrained"}} -->
			<div class="wp-block-group card reveal">

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">WordPress and web</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Support content publishing with practical website skills and technical understanding.</p>
				<!-- /wp:paragraph -->

				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item -->
					<li>WordPress content development</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Web development</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Technical content</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"services-cta","layout":{"type":"constrained"}} -->
		<div class="wp-block-group services-cta">

			<!-- wp:paragraph -->
			<p>Have a project in mind? Let's discuss how I can help.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $contact; ?>">Start a project</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
