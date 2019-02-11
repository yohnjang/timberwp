<?php
/**
 * This is the page template for displaying your custom
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

 get_template_part( 'templates/sparkle/featured' ); 

 get_template_part( 'templates/sparkle/newsletter' ); 

 get_template_part( 'templates/sparkle/testimonials'); 

 get_template_part( 'templates/sparkle/consultation' ); 

 get_template_part( 'templates/sparkle/news' ); 
	
 get_footer(); 

