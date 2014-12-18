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