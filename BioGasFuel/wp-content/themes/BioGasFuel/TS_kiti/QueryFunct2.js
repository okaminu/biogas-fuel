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