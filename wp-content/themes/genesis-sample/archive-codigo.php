<?php
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'loop_archivo_codigo');

function presencia_plantilla_archive_cpt() {
    if( 'codigo' == get_post_type() ) {
        return 'full-width-content';
    }
}
add_filter( 'genesis_site_layout', 'presencia_plantilla_archive_cpt' );

function presencia_clase_body($classes) {

    // Add Classes to body if the post type archive is 'publikasjoner'
    if ( is_post_type_archive( 'codigo' ) ) {
        $classes[] = 'presencia_full';
    }
    // Go for other posts types here


    return $classes;
}
add_filter('body_class', 'presencia_clase_body');
function loop_archivo_codigo()

{
    echo '<div class="cod_archivo">';
    if (have_posts())
    {
        while (have_posts())
        {
            the_post();
            $codigo = get_field('cod_tipo');
            $contenido = get_the_content();
            $tipos = [];
            foreach ($codigo as $code){
                $tipos[] = $code;
            }
            
?>
	<div class="cod_elemento_archivo">
		
			<h2><?php the_title(); ?></h2>
			
		
        <?php 
            echo '<div class="cod_tipo">';
            echo implode(" / ", $tipos);
            echo '</div>';
        ?>
		
		
			
				<pre>
                <?php echo $contenido; ?>
                </pre>
			
			
			
		
		
	</div>
	
	<?php
        } // end while
        
    } // end if
    echo '</div>';
}
genesis();

