<?php
/* Hoja de estilo CUSTOM (culpa de postcss font...)*/
add_action( 'wp_enqueue_scripts', 'maguared_estilos_css', 20 );
function maguared_estilos_css() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/presencia.css' );
}
