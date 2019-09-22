<?php
/* MODS JAIME DE GREIFF */
//* Remove Genesis in-post SEO Settings
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

add_action( 'admin_menu' , 'remove_genesis_post_scripts_box' );
function remove_genesis_post_scripts_box() {
remove_meta_box( 'genesis_inpost_scripts_box', 'post', 'normal' ); 
}