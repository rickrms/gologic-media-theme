<?php
/**
 * Pattern: Website chatbot spotlight (graphic on top, copy below) — GoLogic Media
 */
register_block_pattern( 'gologic-media/chatbot-spotlight', array(
	'title'       => __( 'GoLogic Media Chatbot Spotlight', 'gologic-media' ),
	'categories'  => array( 'gologic-media' ),
	'description' => __( 'Visual chatbot section: graphic placeholder on top, paragraph below.', 'gologic-media' ),
	'content'     => '<!-- wp:group {"className":"gologic-section gologic-section--white","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-section gologic-section--white"><!-- wp:group {"className":"gologic-ai-spotlight","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-ai-spotlight"><!-- wp:paragraph {"className":"gologic-eyebrow","align":"center"} -->
<p class="has-text-align-center gologic-eyebrow">Never miss a lead</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Your website, working while you sleep.</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"gologic-ai-graphic","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-ai-graphic"><!-- wp:paragraph {"className":"placeholder","align":"center"} -->
<p class="has-text-align-center placeholder">Chatbot graphic goes here — replace this block with an image.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-ai-copy","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-ai-copy"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Most website visitors leave without calling. A chatbot answers their questions on the spot — pricing, hours, services — and captures their info so you can follow up. It\'s like having your best salesperson on your site 24/7.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-ai-points","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-ai-points"><!-- wp:paragraph {"className":"gologic-ai-point"} -->
<p class="gologic-ai-point">💬 Answers questions instantly</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gologic-ai-point"} -->
<p class="gologic-ai-point">🌙 Works nights and weekends</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gologic-ai-point"} -->
<p class="gologic-ai-point">📋 Captures every lead</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
) );
