(function($){
	"use strict";

	function get_cart(){
		if(window.wc_add_to_cart_params != undefined){
			$.post({
				url: wc_add_to_cart_params.ajax_url,
				dataType: 'JSON',
				data: {
					action: 'woomenucart_ajax'
				},
				success: function(data, textStatus, XMLHttpRequest) {
					$('.keydesign-cart-dropdown').html(data.cart);
					if(data != '') {
						if($('.keydesign-cart .badge, .mobile-shopping-cart .badge').length){
							if(data.articles>0){
								$('.keydesign-cart .badge, .mobile-shopping-cart .badge').html(data.articles);
								$('.keydesign-cart .badge, .mobile-shopping-cart .badge').show();
							} else {
								$('.keydesign-cart .badge, .mobile-shopping-cart .badge').hide();
							}
						} else $('.keydesign-cart .cart-icon-container').append('<span class="badge">'+data.articles+'</span>');
					}
				}
			});
		}
	}

	$(document).ready(function(){
		$('body').bind("added_to_cart", get_cart);
		$('body').bind("wc_fragments_refreshed", get_cart);
	});

})(jQuery);


jQuery(document).ready(function($) {
  $('img[title]').each(function() { $(this).removeAttr('title'); });
});
function hide_title_attributes(){
var t = document.querySelectorAll(‘[title]’);
if(t && t.length > 0){
for(var n=0;n<t.length;++n){
var title=t[n].title;
t[n].removeAttribute('title');
t[n].setAttribute('aria-label',title);
}
}
}
