<?php

$light_color = '#F7FFFF';
$medium_color = '#00DFCA';
$dark_color = '#263A42';
$super_dark_color = '#1D3037';

$light_bg_green = $light_color;
$medium_bg_green = $medium_color;
$dark_bg_green = $dark_color;
$super_dark_bg_green = $super_dark_color;
$light_text_green = $light_color;
$medium_text_green = $medium_color;
$dark_text_green = $dark_color;
$super_dark_text_green = $super_dark_color;
$light_border_color_green = $light_color;
$dark_border_color_green = $dark_color;

echo '.light-bg,#consultation, #navbar-wrapper { background-color: ' . $light_bg_green . ';}';

echo '.medium-bg,#cta, footer#main #footer_newsletter input[type="submit"],#newsletter_section input[type="submit"],.cookiebanner{ background: '. $medium_bg_green . '; }';

echo '.dark-bg,.btn-secondary:hover,#consultation input[type="submit"],#consultation_form button,#footer_copyright { background-color: '. $dark_bg_green . ';}';

echo '.super-dark-bg,#topbar,#cta a, #newsletter_section,footer#main { background-color: '. $super_dark_bg_green . ';}';

echo '.light-text, #newsletter_section, #consultation_form button, footer#main p, #footer_copyright, #footer_copyright a, #topbar a,#topbar, #cta,#cta a, footer#main a,footer#main, #newsletter_section h2, #static_hero #typed, #static_hero h1, #static_hero .display-2,#newsletter_form_text_logo a, #static_hero p.heading,#newsletter_section .display-3 { color: '. $light_text_green . ';}';

echo '.medium-text { color: '. $medium_text_green . ';}';

echo '.dark-text,#consultation_form label,#footer_newsletter,.display-1,.display-2,.display-3,.display-4,.display-5,.display-6,h1,h2,h3,h4,h5,p, nav#primary li a, .entry-title a, nav#primary .display-3 a,#newsletter_section input[type="submit"], footer#main #footer_newsletter input[type="submit"], #consultaiton .display-3 a{ color: '. $dark_text_green . ' }';

echo '.super-dark-text, #consultation .display-4.email, #consultation .display-2.phone,footer#main #footer_newsletter .display-5 { color: '. $super_dark_text_green . '; }';

echo '.light-border-color{ border-color: '. $light_border_color_green . ';}';

echo '.dark-border-color,.btn-secondary,#consultation input[type="email"],#consultation input[type="text"],#consultation textarea, footer#main #footer_newsletter input[type="text"], footer#main #footer_newsletter input[type="email"], footer#main #footer_newsletter textarea { border-color: '. $dark_border_color_green . ';}';

if( get_theme_mod('sparkle_hero_gradient_percent_mobile') != null){
	echo '#static_hero:before { background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, '. $super_dark_bg_green .' ';
		echo get_theme_mod('sparkle_hero_gradient_percent_mobile');
		echo '%, transparent 100%);}';
}
else { 
	echo '#static_hero:before { background: '. $super_dark_bg_green .';background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, #263242 50%, transparent 100%);}';
}

if( get_theme_mod('sparkle_hero_gradient_percent_tablet') != null){
	echo '@media only screen and (min-width:768px){ #static_hero:before {
	background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, '. $super_dark_bg_green .' ';
			echo get_theme_mod('sparkle_hero_gradient_percent_tablet');
			echo '%, transparent 100%);
		}
	}';
}
else { 
	echo '@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_bg_green .';background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, '. $super_dark_bg_green .' 50%, transparent 100%);}}';
}

if( get_theme_mod('sparkle_hero_gradient_percent_desktop') != null){
	echo '@media only screen and (min-width:1024px){ #static_hero:after {
		background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, '. $super_dark_bg_green .' ';
			echo get_theme_mod('sparkle_hero_gradient_percent_desktop');
			echo '%, transparent 100%);
		}
	}';
}
else { 
	echo '@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_bg_green .';background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, '. $super_dark_bg_green .' 20%, transparent 100%);}}';
}

if( get_theme_mod('sparkle_typography_mode_switch') == 1 ){
	echo '#featured .featured_image, #news .featured_image, #featured_glider .featured_image, #news_glider .featured_image, #testimonials_glider_wrapper .testimonials_image, #testimonials .testimonials_image { display: none;}

	#static_hero { display:flex; align-content: center; align-items: center; justify-content: center;}
	#static_hero .content .text {position: relative;z-index: 101;bottom: 0;padding: 0;}
	#static_hero .content { height: auto;}
	
	#static_hero:before { background:'. $super_dark_bg_green .';background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, '. $super_dark_bg_green .' 100%, transparent 100%);opacity:1;}

	@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_bg_green .';background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, '. $super_dark_bg_green .' 100%, transparent 100%);opacity:1;}}

	@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_bg_green .';background: linear-gradient(90deg, '. $super_dark_bg_green .' 0%, '. $super_dark_bg_green .' 100%, transparent 100%);opacity:1;}}
	
	';
}
?>