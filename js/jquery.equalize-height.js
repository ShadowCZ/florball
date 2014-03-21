/*
 * jQuery Equalize Height
 * 
*/
(function($){
	$.fn.equalizeHeight = function(){
		var maxHeight = 0;
		return this.each(function(){
			if ($(this).height() > maxHeight) {
				maxHeight = $(this).height();
			}
		})
		.height(maxHeight);
	};
})(jQuery);