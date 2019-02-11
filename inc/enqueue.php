<?php
/**
 * sparkle enqueue scripts
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'sparkle_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function sparkle_scripts() {
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'sparkle-styles', get_stylesheet_directory_uri() . '/src/theme.css', array(), $css_version );
		wp_enqueue_script( 'sparkle-scripts', get_template_directory_uri() . '/src/theme.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		if( get_theme_mod('sparkle_theme_color') == 1 || get_theme_mod('sparkle_theme_color') == null ) {
			wp_enqueue_style( 'sparkle-styles-blue', get_stylesheet_directory_uri() . '/src/blue.min.css', array(), $css_version );
		}

		if( get_theme_mod('sparkle_theme_color') == 2 ) {
			wp_enqueue_style( 'sparkle-styles-red', get_stylesheet_directory_uri() . '/src/red.min.css', array(), $css_version );
		}
		if( get_theme_mod('sparkle_theme_color') == 3 ) {
			wp_enqueue_style( 'sparkle-styles-yellow', get_stylesheet_directory_uri() . '/src/yellow.min.css', array(), $css_version );
		}
		if( get_theme_mod('sparkle_theme_color') == 4 ) {
			wp_enqueue_style( 'sparkle-styles-purple', get_stylesheet_directory_uri() . '/src/purple.min.css', array(), $css_version );
		}
		if( get_theme_mod('sparkle_theme_color') == 5 ) {
			wp_enqueue_style( 'sparkle-styles-green', get_stylesheet_directory_uri() . '/src/green.min.css', array(), $css_version );
		}
		if( get_theme_mod('sparkle_theme_color') == 6 ) {
			wp_enqueue_style( 'sparkle-styles-orange', get_stylesheet_directory_uri() . '/src/orange.min.css', array(), $css_version );
		}
		if( get_theme_mod('sparkle_theme_color') == 0 ) {
			wp_enqueue_style( 'sparkle-styles-monochrome', get_stylesheet_directory_uri() . '/src/monochrome.min.css', array(), $css_version );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'sparkle_scripts' );
function sparkle_front_page_scripts() {

	if( is_front_page() & ( get_theme_mod('sparkle_featured_section_switch') == 2 || get_theme_mod('sparkle_testimonials_section_switch') == 2 || get_theme_mod('sparkle_news_section_switch') == 2 || get_theme_mod('sparkle_featured_section_switch') == null || get_theme_mod('sparkle_testimonials_section_switch') == null || get_theme_mod('sparkle_news_section_switch') == null ) )
	{
		wp_enqueue_style( 'sparkle-glide-css', get_template_directory_uri() . '/src/glide/glide.css', array(), $css_version );
		wp_enqueue_script( 'sparkle-glide-js', get_template_directory_uri() . '/src/glide/glide.js', array(), $js_version, true );
		
		if(get_theme_mod('sparkle_featured_section_switch') == 2 || get_theme_mod('sparkle_featured_section_switch') == null) {
		wp_enqueue_script( 'sparkle-featured-glide-script', get_template_directory_uri() . '/src/glide/featured.js', array(), $js_version, true );
		}

		if(get_theme_mod('sparkle_testimonials_section_switch') == 2 || get_theme_mod('sparkle_testimonials_section_switch') == null) {
			wp_enqueue_script( 'sparkle-testimonials-glide-script', get_template_directory_uri() . '/src/glide/testimonials.js', array(), $js_version, true );
			}

			if(get_theme_mod('sparkle_news_section_switch') == 2 || get_theme_mod('sparkle_news_section_switch') == null ) {
				wp_enqueue_script( 'sparkle-news-glide-script', get_template_directory_uri() . '/src/glide/news.js', array(), $js_version, true );
				}
	}
}
add_action( 'wp_enqueue_scripts', 'sparkle_front_page_scripts' );


function sparkle_blog_scripts() {

	if( is_home() )
	{
		wp_enqueue_style( 'sparkle-bricklayer-css', get_template_directory_uri() . '/src/bricklayer/bricklayer.min.css', array(), $css_version );
		wp_enqueue_script( 'sparkle-bricklayer-js', get_template_directory_uri() . '/src/bricklayer/bricklayer.min.js', array(), $js_version, true );
	}
}
add_action( 'wp_enqueue_scripts', 'sparkle_blog_scripts' );

