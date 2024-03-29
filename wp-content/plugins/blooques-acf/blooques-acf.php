<?php

/*
Plugin Name:    Jaimedegreiff - Bloques con ACF
Plugin URI:     https://presencia.co
Description:    Creación de bloques con Advanced Custom Fields
Author:         Jaime de Greiff
Version:        0.096
Author URI:     https://presencia.co

*/

function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'testimonial',
        'title'             => __('Testimonial'),
        'description'       => __('Un bloque de testimonios.'),
        'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/testimonial/testimonial.php',
        'mode'              => 'auto',
        'category'          => 'common',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'enqueue_style'     => get_stylesheet_directory_uri() . '/bloques.css',

        
    ));
    }
    
    // Check if function exists and hook into setup.
    if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
    }