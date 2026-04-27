jQuery(function($){
	$('#filter-2').submit(function(){
		var filter = $('#filter-2');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
});


jQuery(document).ready(function() { 
	jQuery("#service-filter").on('change', function() { 
		jQuery(this).find("option:selected").each(function() { 
			var services = jQuery(this).attr("value"); 
			var servicesText = jQuery(this).text();
			console.log("servicesText:", servicesText)
			// if (services==212) { 
			if (servicesText=='Salesforce') { 
				jQuery(".GFG").not("." + services).show(); 
				jQuery("." + services).show(); 
				
			} else { 
				jQuery(".GFG").hide(); 
				
			} 

		}); 
	}).change(); 
});


/* Assets filter - Added on 23rd March 25 - By Manish */

jQuery(function($){
	$('#assets-filter').submit(function(){
		var filter = $('#assets-filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
});

document.getElementById('reset-assets-filter').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    document.getElementById('assets-filter').reset(); // Reset the form
});