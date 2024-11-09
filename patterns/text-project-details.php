<?php
/**
 * Title: Project details
 * Slug: arcturiananalytics/text-project-details
 * Categories: text, portfolio
 * Viewport width: 1400
 * Description: A text only section for project details.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%","layout":{"type":"constrained","contentSize":"260px","justifyContent":"left"}} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Our team has developed adaptive CO2 capture solutions that set new industry standards for efficiency and scalability.', 'Title text for the feature area', 'arcturiananalytics' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large","fontFamily":"heading"} -->
			<p class="has-heading-font-family has-x-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'With precision-driven technology and a commitment to innovation, we develop CO2 capture solutions that enhance efficiency, adapt intelligently, and drive meaningful environmental impact.', 'Descriptive title for the feature area', 'arcturiananalytics' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'Our integration of AI with advanced material science underpins our unique solutions, allowing Arcturian Analytics to stay at the forefront of carbon capture technology in an increasingly dynamic market.', 'Descriptive text for the feature area', 'arcturiananalytics' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( 'Our app leverages AI-driven insights to seamlessly connect advanced material science with real-time carbon capture management, keeping Arcturian Analytics at the cutting edge of carbon capture technology in a rapidly evolving market.', 'Descriptive text for the feature area', 'arcturiananalytics' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
