<?php
/**
 * Pattern: Services grid (six services) — GoLogic Media
 */
register_block_pattern( 'gologic-media/services', array(
	'title'       => __( 'GoLogic Media Services Grid', 'gologic-media' ),
	'categories'  => array( 'gologic-media' ),
	'description' => __( 'Six service cards on a light background.', 'gologic-media' ),
	'content'     => '<!-- wp:group {"className":"gologic-section gologic-section--light","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-section gologic-section--light" id="services"><!-- wp:group {"className":"gologic-section-title","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-section-title"><!-- wp:paragraph {"className":"gologic-eyebrow","align":"center"} -->
<p class="has-text-align-center gologic-eyebrow">What we do</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Everything your online presence runs on.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">One team for your website, your Google ranking, and your reputation — so customers find you first.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-services-grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-services-grid"><!-- wp:group {"className":"gologic-service-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-service-card"><!-- wp:paragraph {"className":"gologic-service-icon"} -->
<p class="gologic-service-icon">🔍</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">SEO</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Rank higher on Google. Keyword research, on-page optimization, and local SEO that brings customers to your door.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-service-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-service-card"><!-- wp:paragraph {"className":"gologic-service-icon"} -->
<p class="gologic-service-icon">🎨</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Web Design</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Clean, fast, mobile-friendly websites built to convert visitors into calls, bookings, and sales.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-service-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-service-card"><!-- wp:paragraph {"className":"gologic-service-icon"} -->
<p class="gologic-service-icon">🖥️</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Web Hosting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Fast, secure hosting with backups and updates handled for you. Your site stays up so you don\'t have to think about it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-service-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-service-card"><!-- wp:paragraph {"className":"gologic-service-icon"} -->
<p class="gologic-service-icon">💬</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Website Chatbot</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Answers your customers\' questions while you sleep. Captures leads around the clock — even at 2 AM.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-service-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-service-card"><!-- wp:paragraph {"className":"gologic-service-icon"} -->
<p class="gologic-service-icon">⭐</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Reputation Management</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Protect what people see when they Google you. Review monitoring, responses, and removal of reviews that break the rules.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gologic-service-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group gologic-service-card"><!-- wp:paragraph {"className":"gologic-service-icon"} -->
<p class="gologic-service-icon">✍️</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Content Marketing</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Blog posts, social content, and email that keep you visible and give Google fresh reasons to rank you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
) );
