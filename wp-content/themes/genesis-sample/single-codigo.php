<?php
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'loop_single_codigo');

function loop_single_codigo()

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
		
            <?php echo 'pailas' . $contenido . '<hr/>';?>
            <h2><?php the_title(); ?></h2>
			
		
        <?php 
            echo '<div class="cod_tipo">';
            echo implode(" / ", $tipos);
            echo '</div>';
        ?>
		
		
			
				<h3>Pilláteste</h3>
                <?php the_content(); ?>
                
			
			
			
		
		
	</div>
	
	<?php
        } // end while
        
    } // end if
    echo '</div>';
}
genesis();

