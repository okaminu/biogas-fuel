
<?php // Jei tuscias ?>
<div id="content-container" class="clearfix">

<div id="content" class="clearfix">
<?php

$kalba=KokiaKalba();

if($kalba=="LT")
echo "<h1>Rezultatai paieškai:<i> ". get_search_query() ."</i></h1>";

if($kalba=="EN")
echo "<h1>Search Results:<i> ". get_search_query() ."</i></h1>";


?>
<ul class="news-list clearfix">
<?php
if(!have_posts())
{
if($kalba=="LT")
echo "Straipsniu nerasta";

if($kalba=="EN")
echo "Not Found";


}
?>




<?php while ( have_posts() ) : the_post(); ?>

<?php
$kategor=PostIDtoCatID(get_the_ID());


if(($kalba=="LT") && (!ArLT($kategor)))
continue;
elseif(($kalba=="LT") && (ArLT($kategor)))
$more="Skaityti Daugiau...";



if(($kalba=="EN") && (ArLT($kategor)))
continue;
elseif(($kalba=="EN") && (!ArLT($kategor)))
$more="Read more...";


?>

<li class="clearfix">
<div class="left">
		<h3><a href="<?php the_permalink(); ?>"><?php
		the_title();
		
		?></a></h3>
		
		
		<?php the_excerpt();?>
		
		
		<div class="link-button"><a href="<?php the_permalink(); ?>"><?php echo $more ?></a></div>
</div>
	</li>
	
	


<?php endwhile;  ?>


</ul>

</div>

	
	</div>