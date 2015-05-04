<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// PELICULAS
		$labels = array(
			'name'          => 'Peliculas',
			'singular_name' => 'Pelicula',
			'add_new'       => 'Nueva Pelicula',
			'add_new_item'  => 'Nueva Pelicula',
			'edit_item'     => 'Editar Pelicula',
			'new_item'      => 'Nueva Pelicula',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Pelicula',
			'search_items'  => 'Buscar Pelicula',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Peliculas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'Peliculas' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array('director','año','pais', 'fecha'),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'pelicula', $args );


	});