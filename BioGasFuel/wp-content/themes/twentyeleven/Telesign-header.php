

			
	<script type="text/javascript" src="wp-content/themes/BioGasFuel/jquery_002.js"></script>
	<script type="text/javascript" src="wp-content/themes/BioGasFuel/jquery.js"></script>
	
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>-->

	
	
	
	<script type="text/javascript">
		$(function() {
			$('#slideshow').cycle({
				fx:     'fade',
				speed:  'slow',
				timeout: 8000,
				pager:  '#nav',	
				slideExpr: 'img',
				pagerEvent: 'click.cycle',
				pagerAnchorBuilder: function(index, el) {
        			return '<a href="#"></a>';
    			}
			});
		});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			if(window.location == "http://www.telesign.com/products-demos/telephone-verification/#demo" || window.location == "http://www.telesign.com/products-demos/two-factor-authentication/#demo" || window.location == "http://www.telesign.com/products-demos/phone-id/#demo" ) {
				$(".product-tab-2").show();
				$("#product-tab-2").addClass("active");
				$(".product-tab-1").hide();
				$(".product-tab-3").hide();
			} else {
				$(".product-tab-1").show();
				$("#product-tab-1").addClass("active");
				$(".product-tab-2").hide();
				$(".product-tab-3").hide();
			}
			
			$("#product-tab-1").click(function(){
				$(".product-tab-1").show();
				$(".product-tab-2").hide();
				$(".product-tab-3").hide();
				$("#product-tab-1").addClass("active");
				$("#product-tab-2").removeClass("active");
				$("#product-tab-3").removeClass("active");
			});
			$("#product-tab-2").click(function(e){
				e.preventDefault();
				window.location.hash = 'demo'; 
				$(".product-tab-1").hide();
				$(".product-tab-2").show();
				$(".product-tab-3").hide();
				$("#product-tab-1").removeClass("active");
				$("#product-tab-2").addClass("active");
				$("#product-tab-3").removeClass("active");
			});
			$("#product-tab-3").click(function(){
				$(".product-tab-1").hide();
				$(".product-tab-2").hide();
				$(".product-tab-3").show();
				$("#product-tab-1").removeClass("active");
				$("#product-tab-2").removeClass("active");
				$("#product-tab-3").addClass("active");
			});
			$(".live-product-demo").click(function(e){
				e.preventDefault();
				window.location.hash = 'demo';
				$(".product-tab-1").hide();
				$(".product-tab-2").show();
				$(".product-tab-3").hide();
				$("#product-tab-1").removeClass("active");
				$("#product-tab-2").addClass("active");
				$("#product-tab-3").removeClass("active");
			});
		});
	</script>
	
	

	
	<link rel="stylesheet" type="text/css" href="wp-content/themes/BioGasFuel/reset-min.css" media="screen,print">
	
	<link rel="stylesheet" href="wp-content/themes/BioGasFuel/screen.css" media="screen, print">
	<link rel="stylesheet" href="wp-content/themes/BioGasFuel/courier.css" media="screen, print">
	<link rel="stylesheet" href="wp-content/themes/BioGasFuel/print.css" media="print">
	
	
	<!--[if IE]><link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen, projection"/><![endif]-->
	<!--[if lt IE 7]><link rel="stylesheet" href="/css/ie6.css" type="text/css" media="screen, projection"/><![endif]-->
	
	<link rel="shortcut icon" href="http://telesign.com/favicon.ico">
	