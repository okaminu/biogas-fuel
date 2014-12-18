<?php
/**
 * Headeris

 */
 require_once("TemosFunkcijos.php");
	//pagal nutylejima kalba yra lietuviu
	
	if(!isset($_COOKIE["kalba"]))	
	CreateCookie("LT");

	switch($_POST["lang"])
	{
	case "LT":CreateCookie("LT");
	break;
	case "EN":CreateCookie("EN");
	break;
	}
	
	
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="author" content="aurimasdgt@gmail.com">
<meta name="revisit-after" content="7 Days">
<meta name="robots" content="INDEX, FOLLOW">
<meta name="description" content="BioGas Fuel Project yra projektas skirtas vystyti bio kuro esančias technologijas"/>
<title><?php

	global $page, $paged;

	wp_title( '|', true, 'right' );

	//Pavadinimas
	bloginfo( 'name' );

	// Aprasymas
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php

	wp_head();
	
	
//-----------Nuo cia prasideda tik BioGasFuel svetaines informacija-----------------
//-------------iki cia buvo tik formalumai teisingam title'ui----------------------
?>
<!------------------------------------------------------------------------------>
<?php /*
<script type="text/javascript" src="<?php echo domain;?>wp-content/themes/BioGasFuel/TS_kiti/jquery_002.js"></script>
	<script type="text/javascript" src="<?php echo domain;?>wp-content/themes/BioGasFuel/TS_kiti/jquery.js"></script>
	*/?>

	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>-->

	
	
	<link rel="icon" href="<?php echo domain;?>wp-content/themes/BioGasFuel/images/favicon.ico" type="image/icon">
	<script type="text/javascript" src="<?php echo domain;?>wp-content/themes/BioGasFuel/TS_kiti/QueryFunct2.js"></script>
	
	<script type="text/javascript" src="<?php echo domain;?>wp-content/themes/BioGasFuel/TS_kiti/QueryFunct.js"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo domain;?>wp-content/themes/BioGasFuel/TS_kiti/reset-min.css" media="screen,print">
		<link rel="stylesheet" href="<?php echo domain;?>wp-content/themes/BioGasFuel/TS_kiti/courier.css" media="screen, print">

	

	</head>

<body class="home">

<a name="top"></a>

<div id="page" class="clearfix">

<div id="banner" class="clearfix">
	
	<p class="logo"><a href="<?php echo domain;?>">BioGasFuel</a></p>
	<img class="e" src="<?php echo domain;?>wp-content/themes/BioGasFuel/images/e.png"/>
<img class="eur" src="<?php echo domain;?>wp-content/themes/BioGasFuel/images/eur.png"/>

	
	<p class="client-login"><a href="<?php echo domain;?>wp-admin">Prisijungimas</a></p>
	<div id="langu">
	<?php //-----------Paieska------------------------?>
	<?php //get_search_form(false);?>
		
		<?php
		//Kalbos pakeitimas
		
		$current=NaikintiSlash($_SERVER["REQUEST_URI"]);
		
		//$kint= domain.$_SERVER["HTTP_POST"].$current;
	$kint= domain;
	
	echo "<form class='kalba1' method='POST' action='".$kint."'>
	<input type='submit' name='lang' value='LT' />
	|
	</form>
	
	<form class='kalba2' method='POST' action='".$kint."'>
	<input type='submit' name='lang' value='EN' />
	</form>";
	
		echo "</div>";
		?>
		
		
		<?php
		$kalba=KokiaKalba();
	if($kalba=="LT")
	{
	$query="Įveskite paieškos žodį";
	$sercas="Paieška";
	}
	if($kalba=="EN")
	{
	$query="Insert search keyword";
	$sercas="Search";
	}
	?>
		<img class="stul" src="<?php echo domain;?>wp-content/themes/BioGasFuel/images/stulginskis.jpg"/>
	<form id="searchform" method="post" action="<?php echo domain; ?>">

<script type="text/javascript" src="<?php echo domain;?>wp-content/themes/BioGasFuel/TS_kiti/QueryFunct3.js"></script>
		
		
		<input name="s" id="keywords" onfocus="if(this.value=='<?php echo $query;?>')this.value='';" onblur="if(this.value=='')this.value='Įveskite paieškos žodį';" value="<?php echo $query;?>" size="18" maxlength="100" type="text">
		
		<input type="submit" class="submit-button" value="<?php echo $sercas;?>"/>
		
		
	</form>
	<p class="kairys">VP1-3.1-ŠMM-06-V-01-003<br><b>EUREKA E! 5030 BIOGASFUEL</b> „Dvigubo degalų tiekimo į dyzelinį variklį, dirbantį biodujomis ir nedideliu dyzelino kiekiu, sistemos sukūrimas ir įdiegimas“
</p>
	
</div>
<?php //------------Virsutinis Meniu------------------?>
<div id="nav-wrapper" class="clearfix">

<ul id="global-navigation" class="clearfix">
	
	<?php 


	
	
	if($kalba=="LT")
	{
	MeniuStulp(1, get_the_ID(), false);
	MeniuStulp(9, get_the_ID(), false);
	MeniuStulp(10,get_the_ID(), false);
	MeniuStulp(11,get_the_ID(), false);
	MeniuStulp(12,get_the_ID(), true);
	}
	if($kalba=="EN")
	{
	MeniuStulp(30, get_the_ID(), false);
	MeniuStulp(23, get_the_ID(), false);
	MeniuStulp(24,get_the_ID(), false);
	MeniuStulp(25,get_the_ID(), false);
	MeniuStulp(26,get_the_ID(), true);
	}
	
	
	?>



	

</ul>


</div>
	


		
