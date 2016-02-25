<?php 

/**
 * Registro de Taxonomias
 *
 * 1.- Zonas del cuerpo
 * 2.- Tipo producto
 * 3.- Sexo
 *
 */

/* 1.- Zonas del cuerpo
–––––––––––––––––––––––––––––––––––––––––––––––––– */

if ( ! function_exists( 'register_taxonomy_body_areas' ) ) {

// Register Custom Taxonomy
function register_taxonomy_body_areas() {

	$labels = array(
		'name'                       => _x( 'Zonas del cuerpo', 'Taxonomy General Name', 'byadr' ),
		'singular_name'              => _x( 'Zona del cuerpo', 'Taxonomy Singular Name', 'byadr' ),
		'menu_name'                  => __( 'Zonas', 'byadr' ),
		'all_items'                  => __( 'Todas las zonas', 'byadr' ),
		'parent_item'                => __( 'Zona superior', 'byadr' ),
		'parent_item_colon'          => __( 'Zona superior:', 'byadr' ),
		'new_item_name'              => __( 'Nombre de la nueva zona', 'byadr' ),
		'add_new_item'               => __( 'Añadir nueva zona', 'byadr' ),
		'edit_item'                  => __( 'Editar zona', 'byadr' ),
		'update_item'                => __( 'Actualizar zona', 'byadr' ),
		'view_item'                  => __( 'Ver zona', 'byadr' ),
		'separate_items_with_commas' => __( 'Separar zonas con comas', 'byadr' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar zonas', 'byadr' ),
		'choose_from_most_used'      => __( 'Elegir de las mas usadas', 'byadr' ),
		'popular_items'              => __( 'Zonas populares', 'byadr' ),
		'search_items'               => __( 'Buscar zonas', 'byadr' ),
		'not_found'                  => __( 'No encontrado', 'byadr' ),
		'no_terms'                   => __( 'No existen zonas', 'byadr' ),
		'items_list'                 => __( 'Listado de zonas', 'byadr' ),
		'items_list_navigation'      => __( 'Listado navegable de zonas', 'byadr' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'body_areas', array( 'productos' ), $args );

}
add_action( 'init', 'register_taxonomy_body_areas', 0 );

}


/* 2.- Tipo producto
–––––––––––––––––––––––––––––––––––––––––––––––––– */

if ( ! function_exists( 'register_taxonomy_tipo_prod' ) ) {

// Register Custom Taxonomy
function register_taxonomy_tipo_prod() {

	$labels = array(
		'name'                       => _x( 'Tipo de producto', 'Taxonomy General Name', 'byadr' ),
		'singular_name'              => _x( 'Tipo de producto', 'Taxonomy Singular Name', 'byadr' ),
		'menu_name'                  => __( 'Tipo de producto', 'byadr' ),
		'all_items'                  => __( 'Todos los tipos', 'byadr' ),
		'parent_item'                => __( 'Tipo superior', 'byadr' ),
		'parent_item_colon'          => __( 'Tipo superior:', 'byadr' ),
		'new_item_name'              => __( 'Nombre del nuevo tipo', 'byadr' ),
		'add_new_item'               => __( 'Añadir nuevo tipo', 'byadr' ),
		'edit_item'                  => __( 'Editar tipo', 'byadr' ),
		'update_item'                => __( 'Actualizar tipo', 'byadr' ),
		'view_item'                  => __( 'Ver tipo', 'byadr' ),
		'separate_items_with_commas' => __( 'Separar tipos con comas', 'byadr' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar tipos', 'byadr' ),
		'choose_from_most_used'      => __( 'Elegir de los mas usados', 'byadr' ),
		'popular_items'              => __( 'Tipos populares', 'byadr' ),
		'search_items'               => __( 'Buscar tipos', 'byadr' ),
		'not_found'                  => __( 'No encontrado', 'byadr' ),
		'no_terms'                   => __( 'No existen tipos', 'byadr' ),
		'items_list'                 => __( 'Listado de tipos', 'byadr' ),
		'items_list_navigation'      => __( 'Listado navegable de tipos', 'byadr' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'tipo_prod', array( 'productos' ), $args );

}
add_action( 'init', 'register_taxonomy_tipo_prod', 0 );

}


/* 3.- Sexo
–––––––––––––––––––––––––––––––––––––––––––––––––– */

if ( ! function_exists( 'register_taxonomy_sexo' ) ) {

// Register Custom Taxonomy
function register_taxonomy_sexo() {

	$labels = array(
		'name'                       => _x( 'Sexo', 'Taxonomy General Name', 'byadr' ),
		'singular_name'              => _x( 'Sexo', 'Taxonomy Singular Name', 'byadr' ),
		'menu_name'                  => __( 'Sexo', 'byadr' ),
		'all_items'                  => __( 'Todos los Sexos', 'byadr' ),
		'parent_item'                => __( 'Sexo', 'byadr' ),
		'parent_item_colon'          => __( 'Sexo:', 'byadr' ),
		'new_item_name'              => __( 'Nombre del nuevo Sexo', 'byadr' ),
		'add_new_item'               => __( 'Añadir nuevo Sexo', 'byadr' ),
		'edit_item'                  => __( 'Editar Sexo', 'byadr' ),
		'update_item'                => __( 'Actualizar Sexo', 'byadr' ),
		'view_item'                  => __( 'Ver Sexo', 'byadr' ),
		'separate_items_with_commas' => __( 'Separar Sexos con comas', 'byadr' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar Sexos', 'byadr' ),
		'choose_from_most_used'      => __( 'Elegir de los mas usados', 'byadr' ),
		'popular_items'              => __( 'Sexos populares', 'byadr' ),
		'search_items'               => __( 'Buscar Sexos', 'byadr' ),
		'not_found'                  => __( 'No encontrado', 'byadr' ),
		'no_terms'                   => __( 'No existen Sexos', 'byadr' ),
		'items_list'                 => __( 'Listado de Sexos', 'byadr' ),
		'items_list_navigation'      => __( 'Listado navegable de Sexos', 'byadr' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'sexo', array( 'productos' ), $args );

}
add_action( 'init', 'register_taxonomy_sexo', 0 );

}

