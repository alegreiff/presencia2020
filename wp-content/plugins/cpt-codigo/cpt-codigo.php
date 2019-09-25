<?php

/*
Plugin Name:    Jaimedegreiff - CPT Código
Plugin URI:     https://presencia.co
Description:    Añade un Custom Post Type para código
Author:         Jaime de Greiff
Version:        0.094
Author URI:     https://presencia.co

*/

// Register Custom Post Type
function crea_codigo() {

	$labels = array(
		'name'                  => _x( 'Codigos', 'Post Type General Name', 'presencia' ),
		'singular_name'         => _x( 'Codigo', 'Post Type Singular Name', 'presencia' ),
		'menu_name'             => __( 'Códigos', 'presencia' ),
		'name_admin_bar'        => __( 'Códigos', 'presencia' ),
		'archives'              => __( 'Item Archives', 'presencia' ),
		'attributes'            => __( 'Item Attributes', 'presencia' ),
		'parent_item_colon'     => __( 'Parent Item:', 'presencia' ),
		'all_items'             => __( 'Toditicos los códigos', 'presencia' ),
		'add_new_item'          => __( 'Agregar código', 'presencia' ),
		'add_new'               => __( 'Añadir nuevo', 'presencia' ),
		'new_item'              => __( 'Nuevo código', 'presencia' ),
		'edit_item'             => __( 'Editar código', 'presencia' ),
		'update_item'           => __( 'Actualizar código', 'presencia' ),
		'view_item'             => __( 'Ver código', 'presencia' ),
		'view_items'            => __( 'Ver códigos', 'presencia' ),
		'search_items'          => __( 'Buscar código', 'presencia' ),
		'not_found'             => __( 'No encontrado', 'presencia' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'presencia' ),
		'featured_image'        => __( 'Imagen destacada', 'presencia' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'presencia' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'presencia' ),
		'use_featured_image'    => __( 'Usar como imagen', 'presencia' ),
		'insert_into_item'      => __( 'Insetar en código', 'presencia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'presencia' ),
		'items_list'            => __( 'Lista de códigos', 'presencia' ),
		'items_list_navigation' => __( 'Items list navigation', 'presencia' ),
		'filter_items_list'     => __( 'Filter items list', 'presencia' ),
	);
	$args = array(
        /*'menu_icon' => plugins_url('cpt-codigo/images/xcode.png'),*/
		'labels'                => $labels,
		'menu_icon'             => 'dashicons-format-status',
		'label'                 => __( 'Codigo', 'presencia' ),
		'description'           => __( 'Códigos para GENESIS', 'presencia' ),
		"capability_type" => "post",
		
		
		"public" => true,

	);
	register_post_type( 'codigo', $args );

}
add_action( 'init', 'crea_codigo', 0 );

