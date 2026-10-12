<?php
/**
 * Pattern: Testimonial placeholder — GoLogic Media
 */
register_block_pattern( 'gologic-media/testimonial', array(
	'title'       => __( 'GoLogic Media Testimonial', 'gologic-media' ),
	'categories'  => array( 'gologic-media' ),
	'description' => __( 'Client testimonial card placeholder.', 'gologic-media' ),
	'content'     => '<!-- wp:group {"className":"gologic-section gologic-section--light","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-section gologic-section--light"><!-- wp:group {"className":"gologic-section-title","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-section-title"><!-- wp:paragraph {"className":"gologic-eyebrow","align":"center"} -->
<p class="has-text-align-center gologic-eyebrow">Client stories</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Small businesses, bigger phones.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-testimonial","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-testimonial"><!-- wp:paragraph {"className":"stars","align":"center"} -->
<p class="has-text-align-center stars">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>Replace this with a real client review — paste your best Google reviews here.</p>
<!-- /wp:paragraph --><cite>— Client Name, Business</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
) );
