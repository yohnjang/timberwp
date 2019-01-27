<?php
/**
 * This is the page template for displaying your templates/sparkle
 *
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

 get_template_part( 'templates/sparkle/hero' ); 

 get_template_part( 'templates/sparkle/cta' ); 

 if( get_theme_mod('sparkle_templates/sparkle_content_switch') == 1 ){
	get_template_part( 'templates/sparkle/templates/sparkle-content' ); 
	}

 get_template_part( 'templates/sparkle/featured' ); 

 if( get_theme_mod('sparkle_templates/sparkle_content_switch') == 2 ){
	get_template_part( 'templates/sparkle/templates/sparkle-content' ); 
	}

 get_template_part( 'templates/sparkle/newsletter' ); 

 if( get_theme_mod('sparkle_templates/sparkle_content_switch') == 3 ){
	get_template_part( 'templates/sparkle/templates/sparkle-content' ); 
	}

 get_template_part( 'templates/sparkle/testimonials'); 

 if( get_theme_mod('sparkle_templates/sparkle_content_switch') == 4 ){
	get_template_part( 'templates/sparkle/templates/sparkle-content' ); 
	}

 get_template_part( 'templates/sparkle/consultation' ); 

 if( get_theme_mod('sparkle_templates/sparkle_content_switch') == 5 ){
	get_template_part( 'templates/sparkle/templates/sparkle-content' ); 
	}

 get_template_part( 'templates/sparkle/news' ); 

 if( get_theme_mod('sparkle_templates/sparkle_content_switch') == 6 ){
	get_template_part( 'templates/sparkle/custom-content' ); 
	}

 get_footer(); 

