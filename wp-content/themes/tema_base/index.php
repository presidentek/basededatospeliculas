<?php get_header(); ?>

<?php 
	//extraer los terminos (años) de la taxonomia 'año_vista'
	$terms = get_terms( 'año_vista', array(
	    'order'   => 'DESC' // ??
	) );
?>

<?php
	// hacer un query por cada termino (= cada año)
	foreach( $terms as $term ) {
 
    // definir el query, post_type, numero de post, etc
    $args = array(
        'post_type' => 'pelicula',
        'año_vista' => $term->slug,
        'posts_per_page' => -1,
    //     'tax_query' => array(
    //     	array(	
    //     		'taxonomy' => 'mes_vista',
				// 'field'    => 'name',
				
    //     	)	
    //     )
    );

    $query = new WP_Query( $args);           
    // mostrar cada termino como un h2                
    echo'<h2>' . $term->name . '</h2>';
     
    // mostrar la metadata de cada pelicula como una lista
    echo '<ul>';
  
        // the loop
        while ( $query->have_posts() ) : $query->the_post(); ?>
	        <li class="peliculas_lista" id="post-<?php the_ID(); ?>">
	        	<p>
		        	<?php the_terms ($post->ID, 'mes_vista'); ?>
		            <h3><?php the_title(); ?>,</h3>
		            <?php the_terms ($post->ID, 'director'); ?>.
					<?php the_terms ($post->ID, 'pais'); ?>
					(<?php the_terms ($post->ID, 'año'); ?>)
				</p>
	        </li>        
        <?php endwhile;
     
    echo '</ul>';
     
    wp_reset_postdata();
 
} ?>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
