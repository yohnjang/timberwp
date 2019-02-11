<?php

echo '<div id="featured_glider">';

echo '<div class="main_headline mb-5">
<div class="display-3 mb-2">';
	if( get_theme_mod('sparkle_featured_headline_main') != null ){
		echo get_theme_mod('sparkle_featured_headline_main');
	}
	else { echo '<i>Primary Audience</i> Insights: Learn to achieve <i>Primary Benefit</i>';} 
echo '</div><!-- display-2 -->
<p class="headline">';
	if( get_theme_mod('sparkle_featured_excerpt_main') != null ){
		echo get_theme_mod('sparkle_featured_excerpt_main');
	}
	else echo 'Use this text to give a brief introduction to your thought leadership below. You want to make your prospect curious enough to click one of your articles so that they can get a deeper understanding of your expertise.'; 
echo '</p>
</div><!-- main_headline -->';


		echo '<div id="featured-glider-wrapper"><div class="glide-container" style="overflow:hidden;">
		<div class="featured-glide">
      <div class="glide__track" data-glide-el="track">
				<ul class="glide__slides">';

	/****************************************************************************************************/
				
	echo '<li class="glide__slide grabbable">';

				if(get_theme_mod('sparkle_featured_image_1') != null){
					echo '<div class="featured_image" style="background-image:url(';
					echo get_theme_mod('sparkle_featured_image_1');
					echo ');"></div>';
				}
				else{
					echo '<div class="featured_image" style="background-image:url(';
					echo get_template_directory_uri() . '/src/stock/stock1.jpg';
					echo ');"></div>';
				} 

				if(get_theme_mod('sparkle_featured_headline_1') != null){
					echo '<div class="featured_headline display-4">';
					echo get_theme_mod('sparkle_featured_headline_1');
					echo '</div>';
				}
				else{
					echo '<div class="featured_headline display-4">How To Achieve <i>Primary Benefit</i> Without <i>Pain Point</i></div>';
				}

				if(get_theme_mod('sparkle_featured_excerpt_1') != null){
					echo '<p class="featured_excerpt">';
					echo get_theme_mod('sparkle_featured_excerpt_1');
					echo '</p>';
				}
				else{
					echo '<p class="featured_excerpt">Before your prospective client spends 10-15 minutes of their time reading through your article, explain to them how you intend to help them through this article.</p>
					<a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultancyaccelerator.com/consultancy-templates/benefit-page">Learn More</a>';
				}
				
				if(get_theme_mod('sparkle_featured_url_1') != null) { 
					echo '<div class="featured_anchor_button"><a href="';
					echo get_theme_mod('sparkle_featured_url_1');
					echo '" class="btn btn-secondary light-text sparkle-read-more-link">Learn More</a></div>';
				}
			
		echo '</li><!-- featured #1 -->';

	/******************************************************************************************************************* */

	echo '<li class="glide__slide grabbable">';

				if(get_theme_mod('sparkle_featured_image_2') != null){
					echo '<div class="featured_image" style="background-image:url(';
					echo get_theme_mod('sparkle_featured_image_2');
					echo ');"></div>';
				}
				else{
					echo '<div class="featured_image" style="background-image:url(';
					echo get_template_directory_uri() . '/src/stock/stock2.jpg';
					echo ');"></div>';
				} 

				if(get_theme_mod('sparkle_featured_headline_2') != null){
					echo '<div class="featured_headline display-4">';
					echo get_theme_mod('sparkle_featured_headline_2');
					echo '</div>';
				}
				else{
					echo '<div class="featured_headline display-4">5 Reasons Your <i>Primary Audience</i> Business May Not Be <i>Primary Benefit</i></div>';
				}

				if(get_theme_mod('sparkle_featured_excerpt_2') != null){
					echo '<p class="featured_excerpt">';
					echo get_theme_mod('sparkle_featured_excerpt_2');
					echo '</p>';
				}
				else{
					echo '<p class="featured_excerpt">Before your prospective client spends 10-15 minutes of their time reading through your article, explain to them how you intend to help them through this article.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultancyaccelerator.com/consultancy-templates/service-template">Learn More</a>';
				}
				
				if(get_theme_mod('sparkle_featured_url_2') != null) { 
					echo '<div class="featured_anchor_button"><a href="';
					echo get_theme_mod('sparkle_featured_url_2');
					echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a></div>';
				}
			
		echo '</li><!-- featured #2 -->';

/******************************************************************************************************************* */

	echo '<li class="glide__slide grabbable">';

		if(get_theme_mod('sparkle_featured_image_3') != null){
			echo '<div class="featured_image" style="background-image:url(';
			echo get_theme_mod('sparkle_featured_image_3');
			echo ');"></div>';
		}
		else{
			echo '<div class="featured_image" style="background-image:url(';
			echo get_template_directory_uri() . '/src/stock/stock3.jpg';
			echo ');"></div>';
		} 

		if(get_theme_mod('sparkle_featured_headline_3') != null){
			echo '<div class="featured_headline display-4">';
			echo get_theme_mod('sparkle_featured_headline_3');
			echo '</div>';
		}
		else{
			echo '<div class="featured_headline display-4">Is Your <i>Primary Audience</i> Business Making This Critical Mistake?</div>';
		}

		if(get_theme_mod('sparkle_featured_excerpt_3') != null){
			echo '<p class="featured_excerpt">';
			echo get_theme_mod('sparkle_featured_excerpt_3');
			echo '</p>';
		}
		else{
			echo '<p class="featured_excerpt">Before your prospective client spends 10-15 minutes of their time reading through your article, explain to them how you intend to help them through this article.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultancyaccelerator.com/consultancy-templates/benefit-page">Learn More</a>';
		}
		
		if(get_theme_mod('sparkle_featured_url_3') != null) { 
			echo '<div class="featured_anchor_button"><a href="';
			echo get_theme_mod('sparkle_featured_url_3');
			echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a></div>';
		}
	
echo '</li><!-- featured #3 -->';

/******************************************************************************************************************* */

echo '<li class="glide__slide grabbable">';

if(get_theme_mod('sparkle_featured_image_4') != null){
	echo '<div class="featured_image" style="background-image:url(';
	echo get_theme_mod('sparkle_featured_image_4');
	echo ');"></div>';
}
else{
	echo '<div class="featured_image" style="background-image:url(';
	echo get_template_directory_uri() . '/src/stock/stock4.jpg';
	echo ');"></div>';
} 

if(get_theme_mod('sparkle_featured_headline_4') != null){
	echo '<div class="featured_headline display-4">';
	echo get_theme_mod('sparkle_featured_headline_4');
	echo '</div>';
}
else{
	echo '<div class="featured_headline display-4">10 Ways that <i>primary audience</i> can solve <i>common problem</i></div>';
}

if(get_theme_mod('sparkle_featured_excerpt_4') != null){
	echo '<p class="featured_excerpt">';
	echo get_theme_mod('sparkle_featured_excerpt_4');
	echo '</p>';
}
else{
	echo '<p class="featured_excerpt">Before your prospective client spends 10-15 minutes of their time reading through your article, explain to them how you intend to help them through this article.</p><a class="btn btn-secondary sparkle-read-more-link light-text" href="https://www.consultancyaccelerator.com/consultancy-templates/benefit-page">Learn More</a>';
}

if(get_theme_mod('sparkle_featured_url_4') != null) { 
	echo '<div class="featured_anchor_button"><a href="';
	echo get_theme_mod('sparkle_featured_url_4');
	echo '" class="btn btn-secondary sparkle-read-more-link">Learn More</a></div>';
}

echo '</li><!-- featured #4 -->';

/******************************************************************************************************************* */

if(get_theme_mod('sparkle_featured_image_5') != null && get_theme_mod('sparkle_featured_headline_5') != null && get_theme_mod('sparkle_featured_excerpt_5') != null){

	echo '<li class="glide__slide grabbable"><div class="featured_image" style="background-image:url(';
	echo get_theme_mod('sparkle_featured_image_5');
	echo ');"></div>';

	echo '<div class="featured_headline display-4">';
	echo get_theme_mod('sparkle_featured_headline_5');
	echo '</div>';

	echo '<p class="featured_excerpt">';
	echo get_theme_mod('sparkle_featured_excerpt_5');
	echo '</p>';

	if(get_theme_mod('sparkle_featured_url_5') != null) { 
		echo '<div class="featured_anchor_button"><a href="';
		echo get_theme_mod('sparkle_featured_url_5');
		echo '" class="btn btn-secondary light-text sparkle-read-more-link">Learn More</a></div>';
	}
	
	echo '</li><!-- featured #5 -->';
}

else { 
	// don't show featured #5
}

/******************************************************************************************************************* */

if(get_theme_mod('sparkle_featured_image_6') != null && get_theme_mod('sparkle_featured_headline_6') != null && get_theme_mod('sparkle_featured_excerpt_6') != null){

	echo '<li class="glide__slide grabbable"><div class="featured_image" style="background-image:url(';
	echo get_theme_mod('sparkle_featured_image_6');
	echo ');"></div>';

	echo '<div class="featured_headline display-4">';
	echo get_theme_mod('sparkle_featured_headline_6');
	echo '</div>';

	echo '<p class="featured_excerpt">';
	echo get_theme_mod('sparkle_featured_excerpt_6');
	echo '</p>';

	if(get_theme_mod('sparkle_featured_url_6') != null) { 
		echo '<div class="featured_anchor_button"><a href="';
		echo get_theme_mod('sparkle_featured_url_6');
		echo '" class="btn btn-secondary light-text sparkle-read-more-link">Learn More</a></div>';
	}
	
	echo '</li><!-- featured #6 -->';
}

else { 
	// don't show featured #6
}


/************************************************************************************ */

echo '
</ul>
</div><!-- glide__track -->
</div><!-- glide -->
</div><!-- glide-container -->
</div><!-- featured-glider-wrapper -->
</div><!-- #featured -->';

?>
