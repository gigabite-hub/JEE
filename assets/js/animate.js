jQuery(document).ready(function($){

	/// Lazy load effects
	$(".lazy-parallax").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onTopHidden: function( elm ) {
	        $(elm).removeClass('parallax');
	    },
		onTopIn: function( elm ) {
	        $(elm).addClass('parallax');
	    },
		onBottomHidden: function( elm ) {
	        $(elm).removeClass('parallax');
	    },
		onBottomIn: function(elm, distance){
			$(elm).addClass("parallax");
		}
	});

	$(".lazy").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		//onTopIn: function(elm, distance){
		//	$(elm).addClass("animated-slow zoomIn");
		//},
		//onTopOut: function(elm, distance){
		//	$(elm).removeClass("animated-slow zoomIn");
		//},
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated-slow zoomIn");
		},
		//onBottomOut: function(elm, distance){
		//	$(elm).removeClass("animated-slow zoomIn");
		//}
	});
	
	
	$(".lazy-slide-r").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated slideInRight");
		}
	});
	$(".lazy-slide-l").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated slideInLeft");
		}
	});
	$(".lazy-slide-u").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated slideInUp");
		}
	});
	$(".lazy-slide-d").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated slideInDown");
		}
	});
	$(".lazy-fade-in").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated-slow fadeIn");
		}
	});
	$(".lazy-fade-r").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated fadeInRight");
		}
	});
	$(".lazy-fade-l").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated fadeInLeft");
		}
	});
	$(".lazy-fade-u").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated fadeInUp");
		}
	});
	$(".lazy-fade-d").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated fadeInDown");
		}
	});
	$(".lazy-zoom-out").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated zoomOutSmall");
		}
	});
	$(".lazy-bounce").scrollfire({
		offset: 0,
		topOffset: 0,
		bottomOffset: 0,
		onBottomIn: function(elm, distance){
			$(elm).addClass("animated bounceInDown");
		}
	});
	$(window).load(function(){
		$(".lazy-reveal").scrollfire({
			offset: 0,
			topOffset: 0,
			bottomOffset: 0,
			onBottomIn: function(elm, distance){
				$(elm).addClass("reveal");
			}
		});
		$(".lazy-reveal-down").scrollfire({
			offset: 50,
			topOffset: 0,
			bottomOffset: 0,
			onBottomIn: function(elm, distance){
				$(elm).addClass("reveal-down");
			}
		});
		$(".lazy-reveal-l").scrollfire({
			offset: 50,
			topOffset: 0,
			bottomOffset: 0,
			onBottomIn: function(elm, distance){
				$(elm).addClass("reveal-left");
			}
		});
		//$(".slideOpen").delay(100).slideDown(500);
	});
});