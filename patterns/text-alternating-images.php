<?php
/**
 * Title: Text with alternating images
 * Slug: arcturiananalytics/text-alternating-images
 * Categories: text, about
 * Viewport width: 1400
 * Description: A text section, then a two column section with text in one and image in another.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">

			<!-- wp:heading {"textAlign":"center","className":"is-style-asterisk"} -->
			<h2 class="wp-block-heading has-text-align-center is-style-asterisk"><?php echo esc_html_x( 'Unlocking Profit from CO2 Reduction with Advanced Carbon Credit Tools', 'Sample heading content', 'arcturiananalytics' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
			<p class="has-text-align-center"><?php echo esc_html_x( 'Arcturian Analytics streamlines carbon credit management for maximized earnings.', 'Sample subheading content', 'arcturiananalytics' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:heading {"level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading is-style-asterisk"><?php echo esc_html_x( 'Next-Gen Electrolyzer Tech', 'Sample list heading', 'arcturiananalytics' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
				<ul class="is-style-checkmark-list" style="line-height:1.75">

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Reduces energy usage by optimizing the electrolysis process.', 'Sample list item', 'arcturiananalytics' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Simplifies monitoring with an intuitive interface displaying key metrics.', 'Sample list item', 'arcturiananalytics' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Tracks the amount of CO2 converted continuously.', 'Sample list item', 'arcturiananalytics' ); ?></li>
					<!-- /wp:list-item -->

				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-large is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/electrolyzer.webp" alt="<?php esc_attr_e( 'Electrolyzer', 'arcturiananalytics' ); ?>" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-large is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ml-electrochemistry.webp" alt="<?php esc_attr_e( 'ML-Driven Electrochemistry', 'arcturiananalytics' ); ?>" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:heading {"level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading is-style-asterisk"><?php echo esc_html_x( 'CarbonIQ: Smarter Capture & Credits', 'Sample heading', 'arcturiananalytics' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
				<ul class="is-style-checkmark-list" style="line-height:1.75">
					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Connects users to buy, sell, and trade carbon credits.', 'Sample list item', 'arcturiananalytics' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Tracks earned, traded, and stored carbon credits.', 'Sample list item', 'arcturiananalytics' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html_x( 'Allows monitoring across multiple facilities or sites.', 'Sample list item', 'arcturiananalytics' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
