<?php if( get_theme_mod('sparkle_testimonials_section_switch') == 2 || get_theme_mod('sparkle_testimonials_section_switch') == null ){
	get_template_part( 'templates/sparkle/testimonials-glider' );
}

elseif( get_theme_mod('sparkle_testimonials_section_switch') == 1 ){
	get_template_part( 'templates/sparkle/testimonials-regular' );
}

else { 
	// show nothing
}
?>