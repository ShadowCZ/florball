;(function($){
	$.fn.submitOnChange = function(settings) {
		
		var settings = $.extend({
			changeElements: "select",
			hideElements: "input[type=submit], input[type=image], button[type=submit]",
			callBack : function(){}
		}, settings);
		
		return this.each(function() {
			var jForm = $(this);
			jForm
				.find(settings.hideElements).hide().end()
				.find(settings.changeElements).change(function(){
					settings.callBack(this);
					jForm.submit();
				});
		});
	};
})(jQuery);
