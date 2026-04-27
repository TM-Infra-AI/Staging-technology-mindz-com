<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="assets-filter">
	<?php

	//TAXONOMY 1
	if ($terms = get_terms(array('taxonomy' => 'expertise', 'orderby' => 'name'))) :

		echo '<select name="expertisefilter" id="expertisefilter"><option value="">Select Expertise...</option>';
		foreach ($terms as $term) :
			// echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the expertise as the value of an option
			echo '<option value="' . $term->term_id . '" data-expertise="' . $term->name . '">' . $term->name . '</option>';
		endforeach;
		echo '</select>';
	endif;

	//TAXONOMY 2
	if ($terms_2 = get_terms(array('taxonomy' => 'industry', 'orderby' => 'name'))) :

		echo '<select name="industryfilter" id="industryfiter"><option value="">Select Industry...</option>';
		foreach ($terms_2 as $term) :
			echo '<option value="' . $term->term_id . '" data-industry="' . $term->name . '">' . $term->name . '</option>';
		endforeach;
		echo '</select>';
	endif;
	?>
	<button>Apply filter</button>
	<a id="reset-assets-filter">Reset</a>
	<input type="hidden" name="action" value="assets_filter">
</form>
<div id="response">
	<?php require 'all-posts.php'; ?>
</div>