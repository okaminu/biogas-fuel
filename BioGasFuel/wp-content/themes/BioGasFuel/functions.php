<?php 
function SkaitytiDaugiau()
{
global $post;

//return "<a class='daugiau' href='".get_permalink($post->ID) ."'>Skaityti Daugiau...</a>";
return "...";



}
add_filter('excerpt_more', 'SkaitytiDaugiau');


function DaugiauIlgis($ilgis)
{
return 300;

}

add_filter('excerpt_length', 'DaugiauIlgis', 999);

add_theme_support('post-formats', array('aside'));




 ?>