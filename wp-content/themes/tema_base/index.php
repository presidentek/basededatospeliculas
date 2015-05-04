	<?php get_header(); 
		?>

<div class="lista">
	<p>

	<?php

			$args = array(
				'post_type' => 'pelicula',
				'posts_per_page' => 5 
			);


			$peliculas = get_posts($args);

				foreach($peliculas as $post): setup_postdata($post);
				the_title();



				$term_list = wp_get_post_terms($post->ID, 'mes_vista');
				foreach ($term_list as $term) {
					echo $term->name; 
				}

				$term_list = wp_get_post_terms($post->ID, 'año_vista');
				foreach ($term_list as $term) {
					echo $term->name; 
				}

				$term_list = wp_get_post_terms($post->ID, 'director');
				foreach ($term_list as $term) {
					echo $term->name; 
				}

				$term_list = wp_get_post_terms($post->ID, 'pais');
				foreach ($term_list as $term) {
					echo $term->name; 
				}

				$term_list = wp_get_post_terms($post->ID, 'año');
				foreach ($term_list as $term) {
					 echo $term->name;
				}		

				echo '<br/> <br/>';
			
			endforeach;
			


	?>
</p>
</div>
	
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
