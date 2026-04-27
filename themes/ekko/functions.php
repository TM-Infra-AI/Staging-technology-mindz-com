<?php
/**
 * ekko functions file
 *
 * @package ekko
 * by KeyDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

require_once( get_template_directory() . '/core/init.php');


add_filter( 'wp_get_attachment_image_attributes', 'remove_image_text');
function remove_image_text( $attr ) {
unset($attr['title']);
return $attr;
}
 // -------------------------------------
 // Edit below this line
 // -------------------------------------


//Name Validaiton for Job Titile or Full Name
add_filter( 'wpcf7_validate_text*', 'custom_text_validation_filter', 50, 2 );

function custom_text_validation_filter( $result, $tag ) {
if ( 'your-name' == $tag->name ) {
$your_name = isset( $_POST['your-name'] ) ? trim( $_POST['your-name'] ) : '';

if (preg_match('/[0-9]/', $your_name)) {
$result->invalidate( $tag, "Please Enter Letters Only" );

}
}

if ( 'first-name' == $tag->name ) {
$your_name = isset( $_POST['first-name'] ) ? trim( $_POST['first-name'] ) : '';

if (preg_match('/[0-9]/', $your_name)) {
$result->invalidate( $tag, "Please Enter Letters Only" );

}
}

if ( 'last-name' == $tag->name ) {
$your_name = isset( $_POST['last-name'] ) ? trim( $_POST['last-name'] ) : '';

if (preg_match('/[0-9]/', $your_name)) {
$result->invalidate( $tag, "Please Enter Letters Only" );

}
}

return $result;
}
// for removing default block style css and js for the page speed performance
add_action(
	'wp_default_styles',
	function( $styles ) {

		/* Create an array with the two handles wp-block-library and
		 * wp-block-library-theme.
		 */
		$handles = [ 'wp-block-library', 'wp-block-library-theme' ];

		foreach ( $handles as $handle ) {
			// Search and compare with the list of registered style handles:
			$style = $styles->query( $handle, 'registered' );
			if ( ! $style ) {
				continue;
			}
			// Remove the style
			$styles->remove( $handle );
			// Remove path and dependencies
			$styles->add( $handle, false, [] );
		}
	},
	PHP_INT_MAX
);
function custom_scripts() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/custom/custom.css' );
       
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/custom/custom.js', array('jquery'), '', true );
	 	wp_enqueue_script ( 'dropdown-filter', get_template_directory_uri() . '/ajax/dropdown-filter.js' );


}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

// function get_portfolio_categories() {
//     $categories = get_terms(array(
//         'taxonomy' => 'portfolio-category', // Replace with the actual taxonomy name for portfolio categories
//         'hide_empty' => false,
//     ));

//     $category_data = array();

//     foreach ($categories as $category) {
//         $category_data[] = array(
//             'name' => $category->name,
//             'slug' => $category->slug,
//         );
//     }

//     echo json_encode($category_data);
//     wp_die();
// }

// add_action('wp_ajax_get_portfolio_categories', 'get_portfolio_categories');
// add_action('wp_ajax_nopriv_get_portfolio_categories', 'get_portfolio_categories');

function get_portfolio_items() {
    $category = $_POST['category'];
     

if($category==='All'){
   $args = array(
        'post_type' => 'portfolio', // Replace with your custom post type name
        'posts_per_page' => -1, // Display all portfolio items
        
        );

}else{
    $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1, 
         's' =>$category, 
        
    ); 
}
    
      
    
    $query = new WP_Query($args);
    // echo $query;
    if ($query->have_posts()):
        while ($query->have_posts()) : $query->the_post();
        $post_content = get_the_content();
         $post_url = get_permalink();
        $post_thumbnail = get_the_post_thumbnail(); // Get the post's featured image (thumbnail)
        $post_title = get_the_title(); // Get post title
        
       
    //  echo $post_content;
        // Display the post title and thumbnail
        echo '<div class="main_box col-md-6">';
        echo '<a href='.$post_url.'>' . $post_thumbnail . '</a>' ;
        echo '<div class="textbox_post"><a href='.$post_url.'><h4>' . $post_title . '</h4></a></div>';
        echo '</div>';
        
    endwhile;
    wp_reset_postdata();
    else :
        $output = 'No portfolio items found for this category.';
    endif;
    wp_die();
   
}

add_action('wp_ajax_get_portfolio_items', 'get_portfolio_items');
add_action('wp_ajax_nopriv_get_portfolio_items', 'get_portfolio_items');

// function get_portfolio_mixed_items() {
//     $category = $_POST['category'];
//     $industry = $_POST['industry'];

// if($category==='All'){
//   $args = array(
//         'post_type' => 'portfolio', // Replace with your custom post type name
//         'posts_per_page' => -1, // Display all portfolio items
        
//         );

// }else{
//     $args = array(
//         'post_type' => 'portfolio',
//         'posts_per_page' => -1, 
//          's' =>$category+''+$industry, 
        
//     ); 
// }
    
      
    
//     $query = new WP_Query($args);
//     // echo $query;
//     if ($query->have_posts()):
//         while ($query->have_posts()) : $query->the_post();
//         $post_content = get_the_content();
//          $post_url = get_permalink();
//         $post_thumbnail = get_the_post_thumbnail(); // Get the post's featured image (thumbnail)
//         $post_title = get_the_title(); // Get post title
        
       
//     //  echo $post_content;
//         // Display the post title and thumbnail
//         echo '<div class="main_box col-md-6">';
//         echo '<a href='.$post_url.'>' . $post_thumbnail . '</a>' ;
//         echo '<div class="textbox_post"><a href='.$post_url.'><h4>' . $post_title . '</h4></a></div>';
//         echo '</div>';
        
//     endwhile;
//     wp_reset_postdata();
//     else :
//         $output = 'No portfolio items found for this category.';
//     endif;
//     wp_die();
   
// }
// add_action('wp_ajax_get_portfolio_mixed_items', 'get_portfolio_mixed_items');
// add_action('wp_ajax_nopriv_get_portfolio_mixed_items', 'get_portfolio_mixed_items');




