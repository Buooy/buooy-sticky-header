(function ( $ ) {
	"use strict";

	$(document).ready(function(){
	
		/* Show when in position */
		if( $(document).scrollTop() >= bsh_show_position  ){
			$('#bsh').fadeIn();
		}
		else{
			$('#bsh').fadeOut();
		}
		$(document).scroll(function(){
			if( $(document).scrollTop() >= bsh_show_position  ){
				$('#bsh').fadeIn();
			}
			else{
				$('#bsh').fadeOut();
			}
		});
		
		/* Onclicking facebook button */
		$('.bsh-facebook').click(function(){
			FB.ui({
				method: 'share',
				href: document.URL,
			}, function(response){});
		});
		/* Onclicking twitter button */
		$('.bsh-twitter').click(function(event){	
			
			var _url = 'https://twitter.com/intent/tweet?text=';
			_url += 	encodeURIComponent( $('.bsh-title').text() );
			_url +=		'&url='+encodeURIComponent(document.URL);
			_url +=		'&via='+encodeURIComponent(bsh_twitter_screen_name);
			_url +=		'&original_referer='+encodeURIComponent(document.URL);
		
			var width  = 575,
			height = 400,
			left   = ($(window).width()  - width)  / 2,
			top    = ($(window).height() - height) / 2,
			opts   = 'status=1' +
					 ',width='  + width  +
					 ',height=' + height +
					 ',top='    + top    +
					 ',left='   + left;
			window.open(_url, 'twitter', opts);
			return false;
		});
		
	});

}(jQuery));
