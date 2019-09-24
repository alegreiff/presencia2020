<?php
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'loop_persona_cine');

function loop_persona_cine()
{
    if (have_posts())
    {
        while (have_posts())
        {
            the_post();
            $codigo = get_field('cod_tipo');
            $contenido = get_the_content();
            
?>
	<div class="personacine">
		<div class="nombrepaispersonacine">
			<h2><?php the_title(); ?></h2>
			
		</div>
        <p><?php 
            print_r("<pre>");
            print_r($codigo);
            print_r("</pre>");
        ?></p>
		
		<div class="infopersona">
			<div class="infopersonacine">
				<pre>
                <?php echo $contenido; ?>
                </pre>
			</div>
			
			
		</div>
		
	</div>
	
	<?php
        } // end while
        
    } // end if
    
}
genesis();

