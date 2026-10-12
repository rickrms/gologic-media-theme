<?php
/**
 * Pattern: Final CTA — GoLogic Media
 */
register_block_pattern( 'gologic-media/final-cta', array(
	'title'       => __( 'GoLogic Media Final CTA', 'gologic-media' ),
	'categories'  => array( 'gologic-media' ),
	'description' => __( 'Closing call to action with big phone number.', 'gologic-media' ),
	'content'     => '<!-- wp:group {"className":"gologic-final-cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-final-cta"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Let\'s get your business found.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Free SEO review. We\'ll show you where you stand on Google and exactly what it\'d take to rank higher — no pressure, no jargon.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a class="gologic-phone-big" href="tel:+12015300372">201-530-0372</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Get My Free SEO Review</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->',
) );
