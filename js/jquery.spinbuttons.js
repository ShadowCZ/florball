(function($j){
	
	// Default button
	var defBtn = ['<button type="button">', '</button>'];
	
	// Update value ( + / - )
	var updateValue = function($field, newValue, opts, btns, init) {
		
		var oldValue = ($field.val()-0);
		
		if (opts.maxValue){
			if (newValue >= opts.minValue && (newValue <= opts.maxValue || newValue < oldValue)) {
				$field.val( newValue )
			}
			
			if (newValue >= opts.maxValue) {
				btns.up.addClass("disabled");
				newValue = opts.maxValue;
			}
			else {
				btns.up.removeClass("disabled");
			}
		}
		else {
			if (newValue >= opts.minValue) {
				$field.val( newValue )
			}
		}
		
		if (newValue <= opts.minValue) {
			btns.down.addClass("disabled");
			newValue = opts.minValue;
		}
		else {
			btns.down.removeClass("disabled");
		}
		
		// isNaN ?
		if (isNaN($field.val())) {
			$field.val( opts.minValue );
		}
		
		// Update ? >Callback
		if ( ((oldValue != ($field.val()-0)) || opts.inactiveCallback) && !init ) {
			opts.callback(newValue, $field);
		}
	};
	
	// Spin Button method
	$j.fn.spinbuttons = function(params) {
		
		var opts = $j.extend({
			spinUpElement: defBtn[0] + '+' + defBtn[1],
			spinDownElement: defBtn[0] + '-' + defBtn[1],
			upInsertFn: function($btn, $field){
				$btn.insertBefore($field);
			},
			downInsertFn: function($btn, $field){
				$btn.insertBefore($field);
			},
			minValue: 1,
			maxValue: false,
			callback: function(){},
			inactiveCallback: false
		}, params);
		
		return this.each(function() {
			var $field = $j(this);
			
			var $spinUp = $j(opts.spinUpElement).addClass("btn-up").data("addvalue", 1);
			var $spinDown = $j(opts.spinDownElement).addClass("btn-down").data("addvalue", -1);
			
			// DOM insertion
			opts.downInsertFn($spinDown, $field);
			opts.upInsertFn($spinUp, $field);
			
			// + or - click
			$spinDown.add($spinUp)
			.click(function(e){
				e.preventDefault();
				
				var newValue = (($field.val()-0) + $j(this).data("addvalue"));
				updateValue($field, newValue, opts, {up: $spinUp, down: $spinDown});
			});
			
			// First update
			updateValue($field, $field.val(), opts, {up: $spinUp, down: $spinDown}, true);
			
			// Keypress
			$field.keyup(function(e) {
				var newValue = ($field.val()-0);
				
				// Max value
				if (opts.maxValue && newValue > opts.maxValue) {
					newValue = opts.maxValue;
					$field.val(newValue);
				}
				
				if (newValue < opts.minValue && newValue!="") {
					newValue = opts.minValue;
					$field.val(newValue);
				}
				
				// isNaN ?
				if (isNaN($field.val())) {
					$field.val( opts.minValue );
				}
				
				// Callback.
				opts.callback($field.val()-0, $field);
			});
		});
	};
})(jQuery);