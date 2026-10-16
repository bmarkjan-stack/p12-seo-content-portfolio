
<?php
/**
 * Title: Contact Details
 * Slug: seo-portfolio/contact-details
 * Categories: seo-portfolio
 * Description: Contact cards for email, GitHub and portfolio.
 * Keywords: contact, email, GitHub, portfolio
 * Viewport Width: 1400
 */
$email = 'YOUR_EMAIL@example.com';
?>

<!-- wp:group {"align":"full","className":"section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section">

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"className":"card-grid","layout":{"type":"grid","columnCount":3}} -->
		<div class="wp-block-group card-grid">

			<!-- wp:group {"className":"card reveal","layout":{"type":"constrained"}} -->
			<div class="wp-block-group card reveal">

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Email</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Have a question or project in mind? Send me an email.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="<?php echo esc_url( 'mailto:' . sanitize_email( $email ) ); ?>"><?php echo esc_html( $email ); ?></a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"card reveal","layout":{"type":"constrained"}} -->
			<div class="wp-block-group card reveal">

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">GitHub</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Explore my code, personal projects and development work.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="https://github.com/bmarkjan-stack" target="_blank" rel="noopener noreferrer">Visit my GitHub profile</a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"card reveal","layout":{"type":"constrained"}} -->
			<div class="wp-block-group card reveal">

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Portfolio</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>View my portfolio and learn more about my projects and skills.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="https://bmarkjan-stack.github.io" target="_blank" rel="noopener noreferrer">Visit my portfolio</a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
