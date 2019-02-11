<?php

$super_dark_color = '#080807';

if( get_theme_mod('sparkle_hero_gradient_percent_mobile') != null){
	echo '#static_hero:before { background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' ';
		echo get_theme_mod('sparkle_hero_gradient_percent_mobile');
		echo '%, transparent 100%);}';
}
else { 
	echo '#static_hero:before { background: '. $super_dark_color .';background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' 50%, transparent 100%);}';
}

if( get_theme_mod('sparkle_hero_gradient_percent_tablet') != null){
	echo '@media only screen and (min-width:768px){ #static_hero:before {
	background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' ';
			echo get_theme_mod('sparkle_hero_gradient_percent_tablet');
			echo '%, transparent 100%);
		}
	}';
}
else { 
	echo '@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_color .';background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' 50%, transparent 100%);}}';
}

if( get_theme_mod('sparkle_hero_gradient_percent_desktop') != null){
	echo '@media only screen and (min-width:1024px){ #static_hero:after {
		background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' ';
			echo get_theme_mod('sparkle_hero_gradient_percent_desktop');
			echo '%, transparent 100%);
		}
	}';
}
else { 
	echo '@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_color .';background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' 20%, transparent 100%);}}';
}

if( get_theme_mod('sparkle_typography_mode_switch') == 1 ){
	echo '#featured .featured_image, #news .featured_image, #featured_glider .featured_image, #news_glider .featured_image, #testimonials_glider_wrapper .testimonials_image, #testimonials .testimonials_image { display: none;}

	#static_hero { display:flex; align-content: center; align-items: center; justify-content: center;}
	#static_hero .content .text {position: relative;z-index: 101;bottom: 0;padding: 0;}
	#static_hero .content { height: auto;}
	
	#static_hero:before { background:'. $super_dark_color .';background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' 100%, transparent 100%);opacity:1;}

	@media only screen and (min-width:768px){ #static_hero:before {background: '. $super_dark_color .';background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' 100%, transparent 100%);opacity:1;}}

	@media only screen and (min-width:1024px){ #static_hero:before { background: '. $super_dark_color .';background: linear-gradient(90deg, '. $super_dark_color .' 0%, '. $super_dark_color .' 100%, transparent 100%);opacity:1;}}
	
	';
}
?>