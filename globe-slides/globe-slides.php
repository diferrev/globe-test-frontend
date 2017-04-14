<?php
/*
Plugin Name: Tipo de contenido Slides
Plugin URI:  http://globe.com
Description: Agrega el tipo de contenido slides
Version:     1.0
Author:      Diego F. Reyes
Author URI:  http://diegofreyes.com
License:     MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: globe-slides
Domain Path: /languages
*/

if ( ! function_exists('globe_slides_post_type') ) {

// Registrar tipo de contenido slides
function globe_slides_post_type() {

    $labels = array(
        'name'                  => _x( 'Slides', 'Post Type General Name', 'globe_slides' ),
        'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'globe_slides' ),
        'menu_name'             => __( 'Slides', 'globe_slides' ),
        'name_admin_bar'        => __( 'Slides', 'globe_slides' ),
        'archives'              => __( 'Archivo', 'globe_slides' ),
        'parent_item_colon'     => __( 'Item superior:', 'globe_slides' ),
        'all_items'             => __( 'Todos los slides', 'globe_slides' ),
        'add_new_item'          => __( 'Añadir nuevo slide', 'globe_slides' ),
        'add_new'               => __( 'Añadir nuevo', 'globe_slides' ),
        'new_item'              => __( 'Nuevo', 'globe_slides' ),
        'edit_item'             => __( 'Editar', 'globe_slides' ),
        'update_item'           => __( 'Actualizar', 'globe_slides' ),
        'view_item'             => __( 'Ver', 'globe_slides' ),
        'search_items'          => __( 'Buscar', 'globe_slides' ),
        'not_found'             => __( 'No se encontraron slides', 'globe_slides' ),
        'not_found_in_trash'    => __( 'Ningún slide encontrado en la papelera', 'globe_slides' ),
        'featured_image'        => __( 'Vista previa', 'globe_slides' ),
        'insert_into_item'      => __( 'Insertar', 'globe_slides' ),
        'uploaded_to_this_item' => __( 'Actualizar a este slide', 'globe_slides' ),
        'items_list'            => __( 'Listado', 'globe_slides' ),
        'items_list_navigation' => __( 'Navegación', 'globe_slides' ),
        'filter_items_list'     => __( 'Filtrar', 'globe_slides' ),
    );
    $args = array(
        'label'                 => __( 'Slide', 'globe_slides' ),
        'description'           => __( 'Slides publicados', 'globe_slides' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'page-attributes' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-images-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page'
    );
    register_post_type( 'slides', $args );

}
add_action( 'init', 'globe_slides_post_type', 0 );
}
