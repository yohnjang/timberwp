<?php 

echo '<div id="news_glider_wrapper"><div class="main_headline">
			<div class="display-2">';
				 if( get_theme_mod('sparkle_news_headline_main') != null ){
					echo get_theme_mod('sparkle_news_headline_main');
				}
				else echo 'Recent News';
			echo '</div>
			<p class="headline">';
			if( get_theme_mod('sparkle_news_excerpt_main') != null ){
					echo get_theme_mod('sparkle_news_excerpt_main');
				}
				else echo 'Check out our latest articles on our blog'; 
			echo '</p>
		</div><!-- main_headline -->';


echo '<div id="news_glider">';

		echo '<div class="glide-container" style="overflow:hidden;">
		<div class="news-glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">';
        
			 query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); 
				echo '<li class="glide__slide grabbable">';
				if(has_post_thumbnail){
					echo '<div class="featured_image" style="background-image:url(';
					echo get_the_post_thumbnail_url( $post->ID, 'medium' ); 
					echo ');"></div>';
				}
				else{
					echo '<div class="featured_image" style="background-image:url(http://placehold.it/400x300);"></div>';
				} 


					the_title( sprintf( '<div class="entry-title display-3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></div>' ); 
				echo '<div class="excerpt">';
				the_excerpt();
				echo '</div>
        </li><!-- post -->';
			endwhile; 
		else :
			 get_template_part( 'loop-templates/content', 'none' ); 
		endif; 
	wp_reset_query(); 
echo '</ul>
</div><!-- glide__track -->
</div><!-- news-glide -->

</div><!-- glide-container -->
</div></div><!-- #news-glider-wrapper -->';

?>

<script>

	</script>