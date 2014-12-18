
<?php // Jei tuscias ?>
<div id="content-container" class="clearfix">

<div id="content" class="clearfix">
<ul >


<?php

$catID=PostIDtoCatID(get_the_ID());
$postai=pagal_kategorija($cat);
$kateg=get_kategorija($cat);

$kalba=KokiaKalba();

echo "<h1>".$kateg->cat_name ."</h1>";

?>
<?php
//-----------------------------------------
$kelintas=0;
$KeistiStiliu=true;


$kiekis=0;
foreach($postai as $postas)
{

$kiekis++;
}
$puslapis = (get_query_var('paged')) ? get_query_var('paged'):1 ;

$masyvas=GetUMD($kiekis, $puslapis);


$up=$masyvas[0];
$middle=$masyvas[1];


query_posts('orderby=id&order=ASC&cat='.$catID.'&paged='.$puslapis.'');
?>


<?php while ( have_posts() ) : the_post(); ?>

<?php
if($up!=0)
{
if($KeistiStiliu){
$kelintas=$up;
$KeistiStiliu=false;
}

$up--;

if($up==0)
$KeistiStiliu=true;



}
elseif($middle!=0)
{
if($KeistiStiliu){
$kelintas=$middle;
$KeistiStiliu=false;
}

$middle--;

if($middle==0)
$KeistiStiliu=true;
}
else
{
$kelintas=0;
}
?>




<li class="<?php echo KatIsdestymas($kelintas); ?> clearfix">
<div class="riba">
<a class="stilius" href="<?php the_permalink(); ?>">Skaityti daugiau</a>
		<h2><a href="<?php the_permalink(); ?>"><?php
		the_title();
		
		?></a></h2>
		
		<?php the_content();?>
		</div>

	</li>
	
	


<?php endwhile; 
//wp_reset_query();
 ?>


</ul>

</div>
<div id="praeitas">
	<?php
	previous_posts_link("&#8592 Praeitas",NULL);
	?>
	</div>
	<?php if($puslapis!=1):?>
	<div id="puslapis">
	<?php echo "--- ".$puslapis ." ---" ?>
	</div>
	<?php endif;?>
<div id="sekantis">
	<?php
	next_posts_link("Sekantis &#8594",NULL);
	?>
	</div>
	<div style="clear:both;"></div>
	
	</div>