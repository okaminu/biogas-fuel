<?php
// Temos Funkcijos
define("domain", "http://biogasfuel.eu/");
define('ApieMus', 10);
define('FotoAlbumas', 11);
define('KitosNuorodos', 12);
define('Projektas', 1);
define('ProjektoPart', 9);

define('AboutUs', 24);
define('PhotoAlbum', 25);
define('OtherReferences', 26);
define('Project', 30);
define('ProjectPart', 23);


function ArLT($id)
{

switch($id)
{
case ApieMus: return true;
break;
case FotoAlbumas: return true;
break;
case KitosNuorodos: return true;
break;
case Projektas: return true;
break;
case ProjektoPart: return true;
break;
default: return false;
break;
}




}

function KokiaKalba()
{
	if($_POST["lang"]=="LT")
	return "LT";
	elseif($_POST["lang"]=="EN")
	return "EN";
	else
{	
	if($_COOKIE["kalba"]=="LT")
	return "LT";
	if($_COOKIE["kalba"]=="EN")
	return "EN";
	else
	return "LT";
}

}


function NaikintiSlash($adresas)
{
$ar=true;

do
{
if($adresas[0]=="/"){
$kiek=strlen($adresas);
$adresas=substr($adresas, 1, $kiek);
}
else
{
$ar=false;
}



}while($ar==true);

return $adresas;

}



function CreateCookie($kalba)
{
if(isset($_COOKIE["kalba"]))
setcookie("kalba", "", time()-4000, "/", "biogasfuel.eu");

if($kalba=="LT")
setcookie("kalba", "LT", time()+3600, "/", "biogasfuel.eu");
elseif($kalba=="EN")
setcookie("kalba", "EN", time()+3600, "/", "biogasfuel.eu");
}





function get_kategorija($cat)
{
$args = array(
	'type'                     => 'post',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 0,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'category',
	'pad_counts'               => false );

	$kategorijos=get_categories($args);
	
	foreach($kategorijos as $kategorija)
	{
	if($kategorija->cat_ID==$cat)
	
	return $kategorija;
	
	}

}

function ArAktyvus($yra , $esu)
{
if($yra==$esu)
{
return "active";
}

}

function PostIDtoCatID($postID)
{
$catID=get_the_category($postID);
return $catID[0]->cat_ID;

}


function pagal_kategorija($cat)
{
$args=array(
	'numberposts'     => 15,
    'offset'          => 0,
    'category'        => $cat,
    'orderby'         => 'post_date',
    'order'           => 'ASC',
    'post_type'       => 'post',
    'post_status'     => 'publish' );
	
	$postai=get_posts($args);
return $postai;
}

function MeniuStulp($cat, $postID , $last){

$catID=PostIDtoCatID($postID);
$postai=pagal_kategorija($cat);
$kateg=get_kategorija($cat);





if($last==false){


	echo "<li id='".$kateg->slug ."' class='".ArAktyvus($catID, $kateg->cat_ID)."'><a href='".domain."category/".$kateg->slug."'>".$kateg->cat_name."</a>";
}
else
{


echo "<li id='".$kateg->slug ."' class='last ".ArAktyvus($catID, $kateg->cat_ID)."'><a href='".domain."category/".$kateg->slug."'>".$kateg->cat_name."</a>";

}
	if($postai[0]!=NULL):
echo "<ul>";
$kiek=count($postai);
	
$kelintas=0;

foreach($postai as $postas):

//------vidinis ciklas(subkategorijos)----------------



$kelintas++;
if($kiek!=$kelintas){
echo "<li id='".$postas->post_name ."'><a href='".domain."".$postas->post_name ."'>".$postas->post_title ."</a></li>";
}
else{
echo "<li id='".$postas->post_name ."' class='last'><a href='".domain."".$postas->post_name ."'>".$postas->post_title ."</a></li>";
}




//----------------------------
	endforeach;
echo "</ul>";
	 endif;
	 
	 	echo "</li>";
		}
		
//----------------------Kategorijos Isdestymas-------------------------------		
function KatIsdestymas($tipas)
{

switch($tipas){

case 1:
return "product-list1";
break;

case 2:
return "product-list2";
break;

case 3:
return "product-list3";
break;

default: return 0;
}

}	

function GetUMD($kiekis, $puslapis)
{

$up=0;
$down=0;

if($puslapis>1)
{
$puslapis--;
$kiekis=$kiekis-($puslapis*6);


}






switch($kiekis){
case 1: $up=1;
break;

case 2: $up=2;
break; 

case 3: $up=3;
break;

case 4: $up=3; $down=1;
break;

case 5: $up=3; $down=2;
break;


default: $up=3; $down=3;
break;

}
$mas=array($up, $down);
return $mas;

}

		
?>