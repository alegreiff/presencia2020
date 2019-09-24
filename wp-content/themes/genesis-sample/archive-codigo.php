<?php
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'loop_persona_cine');
function my_own_body_classes($classes) {

    // Add Classes to body if the post type archive is 'publikasjoner'
    if ( is_post_type_archive( 'codigo' ) ) {
        $classes[] = 'presencia_full';
    }
    // Go for other posts types here


    return $classes;
}
add_filter('body_class', 'my_own_body_classes');
function loop_persona_cine()

{
    echo '<div class="cod_archivo">';
    if (have_posts())
    {
        while (have_posts())
        {
            the_post();
            $codigo = get_field('cod_tipo');
            $contenido = get_the_content();
            
?>
	<div class="cod_elemento_archivo">
		
			<h2><?php the_title(); ?></h2>
			
		
        <?php 
            print_r("<pre>");
            print_r($codigo);
            print_r("</pre>");
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

