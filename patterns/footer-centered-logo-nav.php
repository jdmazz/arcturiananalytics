<?php
/**
 * Title: Footer with centered logo and navigation
 * Slug: arcturiananalytics/footer-centered-logo-nav
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A footer section with a centered logo, navigation, and WordPress credits.
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:site-logo /-->

	<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"fontSize":"small"} /-->

	<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"secondary","fontSize":"small"} -->
	<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-small-font-size">
	<?php
	/* Translators: Arcturian Analytics Copyright. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://arcturiananalytics.com', 'arcturiananalytics' ) ) . '" rel="nofollow">Arcturian Analytics</a>';
			echo sprintf(
				/* Translators: &copy; 2024 - Arcturian Analytics */
				esc_html__( '&copy; 2024 - %1$s', 'arcturiananalytics' ),
				$wordpress_link
			);
		?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
