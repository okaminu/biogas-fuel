<div id="content-container" class="clearfix">

<div id="content" class="clearfix">


<?php // Jei tuscias ?>
<?php if ( ! have_posts() ) : ?>
	
			<p><?php echo "straipsniu nerasta"; ?></p>
			<?php //ManoPaieska(); ?>
		
<?php endif; ?>

<?php
$pageas;
	if(KokiaKalba()=="LT"){
	$the_query = new WP_Query( 'page_id=2' );
	}
	elseif(KokiaKalba()=="EN"){
	$the_query = new WP_Query( 'page_id=243' );
	}

	

	


// The Loop
while ( $the_query->have_posts() ) : $the_query->the_post();
	
	  ?>


<?php

if(is_archive() || is_search()):
the_excerpt();
else:
	the_title('<h1>', '</h1>');
the_content();
endif;
?>
<?php endwhile; 
// Reset Post Data
wp_reset_postdata();

 ?>

</div>
