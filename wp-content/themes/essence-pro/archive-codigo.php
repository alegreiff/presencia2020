<?php
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'loop_persona_cine');

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

