<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////


	add_action( 'init', 'custom_taxonomies_callback', 0 );

	function custom_taxonomies_callback(){

		// AUTORES
		if( ! taxonomy_exists('directores')){

			$labels = array(
				'name'              => 'Directores',
				'singular_name'     => 'Director',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Director',
				'update_item'       => 'Actualizar Director',
				'add_new_item'      => 'Nuevo Director',
				'new_item_name'     => 'Nombre Nuevo Director',
				'menu_name'         => 'Directores'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'directores' ),
			);

			register_taxonomy( 'director', 'pelicula', $args );			
		}

		// PAISES
		if( ! taxonomy_exists('paises')){

			$labels = array(
				'name'              => 'Paises',
				'singular_name'     => 'Pais',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Pais',
				'update_item'       => 'Actualizar Pais',
				'add_new_item'      => 'Nuevo Pais',
				'new_item_name'     => 'Nombre Nuevo Pais',
				'menu_name'         => 'Paises'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'paises' ),
			);

			register_taxonomy( 'pais', 'pelicula', $args );			
		}

		// AÑOS
		if( ! taxonomy_exists('años')){

			$labels = array(
				'name'              => 'Años',
				'singular_name'     => 'Año',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Año',
				'update_item'       => 'Actualizar Año',
				'add_new_item'      => 'Nuevo Año',
				'new_item_name'     => 'Nombre Nuevo Año',
				'menu_name'         => 'Años'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'años' ),
			);

			register_taxonomy( 'año', 'pelicula', $args );			
		}
		
		// AÑO VISTA
		if( ! taxonomy_exists('años_vista')){

			$labels = array(
				'name'              => 'Años vista',
				'singular_name'     => 'Año vista',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Año vista',
				'update_item'       => 'Actualizar Año vista',
				'add_new_item'      => 'Nuevo Año vista',
				'new_item_name'     => 'Nombre Nuevo Año vista',
				'menu_name'         => 'Años vista'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'años_vista' ),
			);

			register_taxonomy( 'año_vista', 'pelicula', $args );			
		}
		
		// MES VISTA
		if( ! taxonomy_exists('meses_vista')){

			$labels = array(
				'name'              => 'Meses vista',
				'singular_name'     => 'Mes vista',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Mes vista',
				'update_item'       => 'Actualizar Mes vista',
				'add_new_item'      => 'Nuevo Mes vista',
				'new_item_name'     => 'Nombre Nuevo Mes vista',
				'menu_name'         => 'Meses vista'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'meses_vista' ),
			);

			register_taxonomy( 'mes_vista', 'pelicula', $args );			
		}

		// TERMS
		/*if ( ! term_exists( 'some-term', 'autor' ) ){
			wp_insert_term( 'Some term', 'category', array('slug' => 'some-term') );
		}*/

		/* // SUB TERMS CREATION
		if(term_exists('parent-term', 'category')){
			$term = get_term_by( 'slug', 'parent-term', 'category');
			$term_id = intval($term->term_id);
			if ( ! term_exists( 'child-term', 'category' ) ){
				wp_insert_term( 'A child term', 'category', array('slug' => 'child-term', 'parent' => $term_id) );
			}
			
		} */
	}
