<?php
/**
 * Pattern: Hero (light) -- GoLogic Media
 */
register_block_pattern( 'gologic-media/hero', array(
	'title'       => __( 'GoLogic Media Hero', 'gologic-media' ),
	'categories'  => array( 'gologic-media' ),
	'description' => __( 'Light hero with headline, subhead, and two CTAs.', 'gologic-media' ),
	'content'     => '<!-- wp:cover {"url":"' . gologic_media_hero_image_url() . '","dimRatio":40,"minHeight":520,"align":"full","className":"gologic-hero-cover"} -->
<div class="wp-block-cover alignfull gologic-hero-cover" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40"></span><img class="wp-block-cover__image-background" alt="" src="' . gologic_media_hero_image_url() . '" data-object-fit="cover"/>
<div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"align":"center","className":"gologic-eyebrow","textColor":"white"} -->
<p class="has-text-align-center gologic-eyebrow has-white-color has-text-color">Digital marketing built around your business</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color">Get found. Get calls. Grow.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"gologic-lead","textColor":"white"} -->
<p class="has-text-align-center gologic-lead has-white-color has-text-color">SEO, web design, and hosting for small business.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Get a Free SEO Review</a></div><!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#services">Explore Services</a></div><!-- /wp:button --></div>
<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->',
) );
