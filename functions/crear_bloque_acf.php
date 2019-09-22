<?php

function register_acf_block_types() {

// register a testimonial block.
acf_register_block_type(array(
    'name'              => 'testimonial',
    'title'             => __('Testimonial'),
    'description'       => __('Un bloque de testimoños.'),
    'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
    'mode'              => 'auto',
    'category'          => 'Miss bloques',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'testimonial', 'quote' ),
    
));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
add_action('acf/init', 'register_acf_block_types');
}