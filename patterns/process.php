<?php
/**
 * Pattern: 3-step process — GoLogic Media
 */
register_block_pattern( 'gologic-media/process', array(
	'title'       => __( 'GoLogic Media Process', 'gologic-media' ),
	'categories'  => array( 'gologic-media' ),
	'description' => __( 'Three steps: Discover, Build, Grow.', 'gologic-media' ),
	'content'     => '<!-- wp:group {"className":"gologic-section gologic-section--light","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-section gologic-section--light"><!-- wp:group {"className":"gologic-section-title","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-section-title"><!-- wp:paragraph {"className":"gologic-eyebrow","align":"center"} -->
<p class="has-text-align-center gologic-eyebrow">How it works</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">From invisible to unavoidable in three steps.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-process","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-process"><!-- wp:group {"className":"gologic-process-step","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-process-step"><!-- wp:paragraph {"className":"step-num","align":"center"} -->
<p class="has-text-align-center step-num">1</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Discover</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">We audit your website, your Google presence, and your competitors — then show you exactly where you stand.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-process-step","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-process-step"><!-- wp:paragraph {"className":"step-num","align":"center"} -->
<p class="has-text-align-center step-num">2</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Build</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">We rebuild or tune your site, fix your SEO, and set up hosting that\'s fast and worry-free.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-process-step","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-process-step"><!-- wp:paragraph {"className":"step-num","align":"center"} -->
<p class="has-text-align-center step-num">3</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Grow</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Ongoing SEO, content, and reputation work — with monthly reports you can actually read.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
) );
