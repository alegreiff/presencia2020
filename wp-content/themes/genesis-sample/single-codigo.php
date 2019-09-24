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
            
?>
	<div class="personacine">
		<div class="nombrepaispersonacine">
			<h2><?php the_title(); ?></h2>
			
		</div>
		
		<div class="infopersona">
			<div class="infopersonacine">
				<?php the_content(); ?>
			</div>
			
			
		</div>
		
	</div>
	
	<?php
        } // end while
        
    } // end if
    
}
genesis();

