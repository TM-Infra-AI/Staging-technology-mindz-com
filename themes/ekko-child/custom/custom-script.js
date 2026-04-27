 $(document).ready(function(){    
        $('#categoryfilter').on('change', function() {
            $(".GFG").hide();
            $('.GFG').val('');
            var category = jQuery('#categoryfilter').val();
	        var categoryName = jQuery(this).find(':selected').data('category');
            
            $.ajax({
        		url:  my_ajax_object.ajaxcallingurl,
        		type: 'POST',
        		data: {
        			action: 'category_ajax_action', // The PHP action to execute
        			category: category,     // Any data you want to send
        			categoryName: categoryName
        		},
        		success: function(resp) {
        // 			console.log(resp);
        			jQuery('#purpose').html(resp);
        		}
        	});
        });
        
        
        $('#purpose').on('change', function(){
            var servicetype = $('#purpose').val(); 
            var serviceName = $(this).find(':selected').data('service');
            var categoryName = $('#categoryfilter').find(':selected').data('category');
            var conceptName = $('#categoryfilter').find(":selected").val();
            $('.GFG').val('');

           $.ajax({
        		url:  my_ajax_object.ajaxcallingurl,
        		type: 'POST',
        		data: {
        			action: 'service_ajax_action', // The PHP action to execute
        			serviceName: serviceName, // Any data you want to send
        			categoryName: categoryName
        		},
        		success: function(resp) {
        			jQuery('.GFG').html(resp);
        		}
        	});
        });


		/* Filters conditions - 24th Jun 25 - Added by Manish */
		$('#expertisefilter').change(function() {
			var expertise_id = $(this).val();

			// If a expertise is selected, fetch associated industry via AJAX
			if (expertise_id) {
				$.ajax({
					url: my_ajax_object.ajaxcallingurl,
					method: 'POST',
					data: {
						action: 'get_industry_by_expertise',
						expertise_id: expertise_id
					},
					success: function(response) {
						$('#industryfiter').html(response); // Populate industry dropdown
						$('#industryfiter').change();
					}
				});
			} else {
				$('#industryfiter').html('<option value="">Select Industry...</option>');
			}
		});
    });