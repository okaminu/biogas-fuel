<div id="content-container" class="clearfix">

<div id="content" class="clearfix">


<?php // Jei tuscias ?>
<?php if ( ! have_posts() ) : ?>
	
			<p><?php echo "straipsniu nerasta"; ?></p>
			<?php //ManoPaieska(); ?>
		
<?php endif; ?>

<?php
	
	
	echo "<h1>".single_post_title(NULL, false) ."</h1>";
	
	
	
	  ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php

if(is_archive() || is_search()):
the_excerpt();
else:

the_content();
endif;
?>
<?php endwhile;  ?>

</div>
