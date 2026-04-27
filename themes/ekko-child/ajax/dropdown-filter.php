<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter-2">
<?php

		//TAXONOMY 1
		if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) :
 
			echo '<select name="categoryfilter" id="categoryfilter"><option value="">Select Category...</option>';
			foreach ( $terms as $term ) :
				// echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
				echo '<option value="' . $term->term_id . '" data-category="' . $term->name . '">' . $term->name . '</option>';
				// echo '<option value="1509"> Software Development</option>';
			endforeach;
			echo '</select>';
		endif;

		//TAXONOMY 2
		if( $terms_2 = get_terms( array( 'taxonomy' => 'service', 'orderby' => 'name' ) ) ) : 
  
			echo '<select name="taxonomyfilter" id="purpose"><option value="">Select Services...</option>';
			foreach ( $terms_2 as $term ) :
				echo '<option value="' . $term->term_id . '" data-service="' . $term->name . '">' . $term->name . '</option>';
        //  	echo '<option value="212"> Salesforce</option>';       
                // ID of the category as the value of an option
        
endforeach;
			echo '</select>';
		endif;
			//TAXONOMY 3
			if( $terms_3 = get_terms( array( 'taxonomy' => 'product', 'orderby' => 'name' ) ) ) : 
  
				echo '<select name="product" class="GFG"><option value="">Select ...</option>';
				foreach ( $terms_3 as $term ) :
					echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
				endforeach;
				echo '</select>';
			endif;
	?>
	<button>Apply filter</button>
    <a id="reset-filter">Reset</a>
	<input type="hidden" name="action" value="myfilter_2">
</form>
<div id="response">
    <?php require 'all-posts.php'; ?>
</div>