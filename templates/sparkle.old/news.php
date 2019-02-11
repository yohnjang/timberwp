
<?php 
	if(get_theme_mod('sparkle_news_section_switch') == 2) {get_template_part('templates/sparkle/news-glider');}
	elseif(get_theme_mod('sparkle_news_section_switch') == 1 ) { get_template_part('templates/sparkle/news-regular');}
	else {}
?>

