<?php
/* Hoja de estilo CUSTOM (culpa de postcss font...)*/
add_action( 'wp_enqueue_scripts', 'maguared_estilos_css', 20 );
function maguared_estilos_css() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/presencia.css' );
}

function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/admin.css');
  }
  add_action('admin_enqueue_scripts', 'admin_style');

//FUNCIÓN NO LOGO WP ADMIN 

function no_wp_logo_admin_bar_remove()
{
?>
        <style type="text/css">
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
                content: url(<?php
    echo get_stylesheet_directory_uri();
?>/images/dashboardlogo.png)   !important;
                top: 2px;
            }

            #wpadminbar #wp-admin-bar-wp-logo > a.ab-item {
                pointer-events: none;
                cursor: default;
            }   
        </style>
    <?php
}
add_action('wp_before_admin_bar_render', 'no_wp_logo_admin_bar_remove', 0);
//FIN FUNCIÓN NO LOGO WP ADMIN   