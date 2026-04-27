<?php

/**
 * Ekko functions file
 *
 * @package ekko
 * by KeyDesign
 */

add_action('wp_enqueue_scripts', 'kd_enqueue_parent_theme_style', 5);
if (! function_exists('kd_enqueue_parent_theme_style')) {
    function kd_enqueue_parent_theme_style()
    {
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('dropdown-filter', get_template_directory_uri() . '/ajax/dropdown-filter.js', '', false);
        wp_enqueue_style('keydesign-style', get_template_directory_uri() . '/style.css', array('bootstrap'));
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('keydesign-style'));
    }
}

add_action('after_setup_theme', 'kd_child_theme_setup');
if (! function_exists('kd_child_theme_setup')) {
    function kd_child_theme_setup()
    {
        load_child_theme_textdomain('ekko', get_stylesheet_directory() . '/languages');
    }
}


function enqueue_custom_script()
{
    wp_enqueue_script('custom-ajax-script', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);

    wp_localize_script('custom-ajax-script', 'ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');


//add_action('wp_ajax_my_api_request', 'my_api_request_callback');
//add_action('wp_ajax_nopriv_my_api_request', 'my_api_request_callback');


// -------------------------------------
// Edit below this line
// -------------------------------------

function wpcodex_add_excerpt_support_for_post()
{
    add_post_type_support('portfolio_ss', 'excerpt');
}
add_action('init', 'wpcodex_add_excerpt_support_for_post');



// =========================================================================
// MULTIPLE DROPDOWN FILTER SHORTCODE 
// =========================================================================
function multiple_dropdown_filter_shortcodee()
{
    ob_start();
    include('ajax/dropdown-filter.php');
    return ob_get_clean();
}
add_shortcode('multiple-dropdown-filter', 'multiple_dropdown_filter_shortcodee');


//javscript addd
function wpflameses_multiple_filter_function()
{
    $args = array(
        'orderby' => 'date', // we will sort posts by date
        'order'    => $_POST['date'] // ASC or DESC
    );

    // for taxonomies / categories
    // 	if( isset($_POST['categoryfilter']) && isset($_POST['taxonomyfilter'] )  && isset($_POST['product'] ))
    // 		$args['tax_query'] = array(
    // 			'relation' => 'OR',
    //             // 'relation' => 'AND',
    // 			array(
    // 				'taxonomy' => 'category',
    // 				'field' => 'id',
    // 				'terms' => $_POST['categoryfilter']
    // 			),
    // // 			array(
    // // 				'taxonomy' => 'service',
    // // 				'field' => 'id',
    // // 				'terms' => $_POST['taxonomyfilter']
    // // 			),
    // 			array(
    // 				'taxonomy' => 'product',
    // 				'field' => 'id',
    // 				'terms' => $_POST['product']
    // 			)
    // 		);

    if (!empty($_POST['categoryfilter']) && !empty($_POST['taxonomyfilter'])  && !empty($_POST['product'])) {
        $args['tax_query'] = array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $_POST['categoryfilter']
            ),
            array(
                'taxonomy' => 'product',
                'field' => 'id',
                'terms' => $_POST['product']
            )
        );
    } else if (!empty($_POST['categoryfilter']) && empty($_POST['taxonomyfilter']) && empty($_POST['product'])) {

        $args = array(
            'post_type' => 'portfolio_ss',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'id',
                    'terms' => $_POST['categoryfilter']
                )

            )
        );
    } else if (!empty($_POST['categoryfilter']) || !empty($_POST['taxonomyfilter'])  && empty($_POST['product'])) {
        // }else if( !empty($_POST['categoryfilter']) || !empty($_POST['taxonomyfilter'] )){
        $args['tax_query'] = array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $_POST['categoryfilter']
            ),
            array(
                'taxonomy' => 'service',
                'field' => 'id',
                'terms' => $_POST['taxonomyfilter']
            )
        );
    } else if (!empty($_POST['taxonomyfilter']) && !empty($_POST['product'])) {
        $args['tax_query'] = array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'service',
                'field' => 'id',
                'terms' => $_POST['taxonomyfilter']
            ),
            array(
                'taxonomy' => 'product',
                'field' => 'id',
                'terms' => $_POST['product']
            )
        );
    } else if (empty($_POST['categoryfilter']) && empty($_POST['taxonomyfilter']) && empty($_POST['product'])) {
        $args = array(
            'post_type' => 'portfolio_ss',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby'     => 'modified',
            'order'       => 'DESC',
        );
    }


    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <div class="row"><?php
                            while ($query->have_posts()): $query->the_post();


                                echo '<div class="col-lg-6 listCaseStudy">';

                                $id = get_the_post_thumbnail_url($query->ID);
                                echo  "<img src='$id'>";

                                echo '<div class="newCaseStudyContent">';
                                echo '<a href="';
                                the_permalink();
                                echo '">';
                                echo '<h4>' . $query->post->post_title . '</h4>';
                                echo '<p>' . $query->post->post_excerpt . '</p>';

                                echo '</div>';

                                echo '</div>';
                            endwhile;
                            ?> </div> <?php
                    wp_reset_postdata();
                else :
                    echo 'No posts found';
                endif;

                die();
            }
            add_action('wp_ajax_myfilter_2', 'wpflameses_multiple_filter_function');
            add_action('wp_ajax_nopriv_myfilter_2', 'wpflameses_multiple_filter_function');








            function enqueue_my_script()
            {
                wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/custom/custom-script.js', array('jquery'), '1.0', true);
                wp_localize_script('my-custom-script', 'my_ajax_object', array('ajaxcallingurl' => admin_url('admin-ajax.php')));
            }
            add_action('wp_enqueue_scripts', 'enqueue_my_script');

            /*------------------ Ajax casestudy select box selector on category start ---------------------*/

            add_action('wp_ajax_category_ajax_action', 'category_ajax_function');
            add_action('wp_ajax_nopriv_category_ajax_action', 'category_ajax_function');
            function category_ajax_function()
            {
                if ($_POST['categoryName'] != '' || !empty($_POST['categoryName'])) {
                    global $wpdb, $table_prefix;
                    $category = $_POST['categoryName'];
                    $service = "";

                    if ($category == 'Retail' || $category == 'Retail Business') {
                        $service = "name IN ('Web Development', 'Salesforce')";
                    } elseif ($category == 'E-Commerce') {
                        $service = "name IN ('Web Development', 'Salesforce')";
                    } elseif ($category == 'Financial Services') {
                        $service = "name IN ('IT Helpdesk', 'Salesforce')";
                    } elseif ($category == 'Truck Transportation Business') {
                        $service = "name IN ('Cybersecurity', 'Salesforce')";
                    } elseif ($category == 'Financial') {
                        $service = "name IN ('IT Helpdesk')";
                    } elseif ($category == 'Advertising Services' || $category == 'Architecture' || $category == 'Construction Industry' || $category == 'Information technology and services') {
                        $service = "name IN ('Salesforce')";
                    } elseif ($category == 'Automobile' || $category == 'Information Technology & Services' || $category == 'Banking' || $category == 'Building And Construction' || $category == 'Business Consulting And Services' || $category == 'Education') {
                        $service = "name IN ('Salesforce')";
                    } elseif ($category == 'Electric industry' || $category == 'General' || $category == 'Healthcare' || $category == 'Insurance' || $category == 'IT Services And IT Consulting' || $category == 'Music Industry' || $category == 'Non-Profit') {
                        $service = "name IN ('Salesforce')";
                    } elseif ($category == 'Professional Services' || $category == 'Real Estate' || $category == 'Retailer' || 'Software Development' || $category == 'Telecommunications Industry' || $category == 'Translation And Localization' || $category == 'Transportation And Vehicle Rental') {
                        $service = "name IN ('Salesforce')";
                    }

                    $wp_table = $table_prefix . 'terms';
                    $sql = "SELECT term_id, name FROM `$wp_table` WHERE " . $service . " Group By name";
                    $results = $wpdb->get_results($sql);
                    echo $response = '<option value="">Select Services...</option>';
                    foreach ($results as $term) {
                        echo $response = '<option value="' . $term->term_id . '" data-service="' . $term->name . '">' . $term->name . '</option>';
                    }
                } elseif ($_POST['categoryName'] == '' || empty($_POST['categoryName'])) {
                    if ($terms_2 = get_terms(array('taxonomy' => 'service', 'orderby' => 'name'))) :
                        echo $response = '<option value="">Select Services...</option>';
                        foreach ($terms_2 as $term) :
                            echo '<option value="' . $term->term_id . '" data-service="' . $term->name . '">' . $term->name . '</option>';
                        endforeach;
                    endif;
                }


                exit();
            }

            /*------------------ Ajax casestudy select box selector on category end ---------------------*/


            /*------------------ Ajax casestudy select box selector on service start ---------------------*/

            add_action('wp_ajax_service_ajax_action', 'service_ajax_function');
            add_action('wp_ajax_nopriv_service_ajax_action', 'service_ajax_function');
            function service_ajax_function()
            {
                global $wpdb, $table_prefix;
                $service = $_POST['serviceName'];
                $categoryName = $_POST['categoryName'];
                $product = "";

                // 	if($service == 'Web Development'){
                // 		$product = "name IN ('Magento', 'Laravel', 'Shopify', 'Exact CRM')";
                // 	}elseif($service == 'IT Helpdesk'){
                // 		$product = "name IN ('ServiceDesk', 'Endpoint Central', 'Sophos Central')";
                // 	}elseif($service == 'Cybersecurity'){
                // 	    $product = "name IN ('Firewall', 'Microsoft Office 365')";
                // 	}else

                if (($service == 'Salesforce') && ($categoryName == '' || empty($categoryName))) {
                    $product = "name IN ('Amazon API', 'Sales Cloud', 'Apex Bulk API Integration', 'CallRail', 'CJ Affiliate', 'Constant Contact', 'DocuSign', 'Einstein Activity Capture', 
	    'Email To Salesforce', 'Experience Cloud', 'Experience Cloud Site', 'Financial Services Cloud', 'Force.com', 'Freshdesk', 'GetFeedback Application', 'GitHub', 'GTM',
	    'Hover API', 'Integration Of Sales Cloud With Marketing Cloud', 'Lightning Web Components (LWC)', 'LWC', 'Marketing Cloud', 'Microsoft Azure Database', 'NPSP', 
	    'NPSP Package', 'NSPS', 'Outbound Funds Module', 'Pardot', 'Program management Module' , 'Sales Console', 'Salesforce Appexchange', 'Salesforce B2C Commerce Cloud',
	    'Salesforce Bulk API', 'Salesforce CPQ', 'Salesforce CRM Analytics', 'Salesforce DevOps Center', 'Salesforce Field Service', 'Salesforce Pardot', 'Salesforce Trialforce',
	    'Service Cloud', 'ServiceDesk', 'ShipStation', 'Site Pages', 'Slack', 'Test Sigma', 'Visualforce page', 'Zapier') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Advertising Services') {
                    $product = "name IN ('Sales cloud', 'Service cloud', 'CallRail') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Architecture') {
                    $product = "name IN ('Sales cloud', 'Experience Cloud') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Automobile') {
                    $product = "name IN ('Integration Of Sales Cloud With Marketing Cloud')";
                } elseif ($service == 'Salesforce' && $categoryName == 'Banking') {
                    $product = "name IN ('Sales cloud', 'Salesforce Pardot') AND term_id != '1437'";
                } elseif (($service == 'Salesforce') && ($categoryName == 'Building And Construction')) {
                    $product = "name IN ('Sales cloud', 'Sales Console') AND term_id != '1437'";
                } elseif (($service == 'Salesforce') && ($categoryName == 'Construction Industry')) {
                    $product = "name IN ('Sales cloud', 'Zapier', 'Hover API', 'Salesforce field service', 'Lightning Web Components (LWC)') AND term_id != '1437'";
                } elseif (($service == 'Salesforce') && ($categoryName == 'Business Consulting And Services')) {
                    $product = "name IN ('Sales cloud', 'Experience Cloud Site') AND term_id != '1437'";
                } elseif (($service == 'Salesforce') && ($categoryName == 'E-Commerce' || $categoryName == 'IT Services And IT Consulting')) {
                    $product = "name IN ('Service cloud', 'Sales cloud') AND term_id != '1437'";
                } elseif (($service == 'Salesforce') && ($categoryName == 'Education' || $categoryName == 'Electric industry' || $categoryName == 'Music Industry' || $category == 'Transportation And Vehicle Rental' || $category == 'Truck Transportation Business')) {
                    $product = "name IN ('Sales cloud') AND term_id != '1437'";
                } elseif (($service == 'Salesforce') && ($categoryName == 'Transportation And Vehicle Rental' || $categoryName == 'Truck Transportation Business')) {
                    $product = "name IN ('Sales cloud') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Financial Services') {
                    $product = "name IN ('Sales cloud', 'Microsoft Azure Database', 'Salesforce Bulk API', 'Financial Services Cloud', 'Salesforce CPQ', 'Service Cloud') AND term_id != '1437'";
                } elseif (($service == 'Salesforce') && ($categoryName == 'General' || $categoryName == 'Healthcare')) {
                    $product = "name IN ('Sales cloud', 'Service cloud') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Information Technology & Services') {
                    $product = "name IN ('Sales cloud', 'Service cloud', 'Slack') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Insurance') {
                    $product = "name IN ('Sales cloud', 'Salesforce CRM Analytics') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Non-Profit') {
                    $product = "name IN ('Sales cloud', 'Service cloud', 'Experience Cloud', 'Pardot', 'NPSP Package', 'GitHub', 'Salesforce DevOps Center', 'Constant Contact', 'Test Sigma', 'NPSP', 'DocuSign', 'Marketing Cloud', 'Site Pages', 'Outbound Funds Module', 'Program management Module', 'Einstein Activity Capture') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Professional Services') {
                    $product = "name IN ('Sales cloud', 'Lightning Web Components (LWC)', 'Visualforce page', 'GetFeedback Application', 'Salesforce Appexchange') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Real Estate') {
                    $product = "name IN ('Sales cloud', 'Experience Cloud', 'Salesforce Trialforce', 'Email To Salesforce', 'Einstein Activity Capture', 'Pardot') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Retail Business') {
                    $product = "name IN ('Sales cloud', 'ShipStation', 'Freshdesk') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Retailer') {
                    $product = "name IN ('Sales cloud', 'Freshdesk') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Software Development') {
                    $product = "name IN ('Sales cloud', 'Pardot') AND term_id != '1437'";
                } elseif ($service == 'Salesforce' && $categoryName == 'Telecommunications Industry') {
                    $product = "name IN ('Service cloud')";
                } elseif ($service == 'Salesforce' && $categoryName == 'Translation And Localization') {
                    $product = "name IN ('Sales cloud', 'Force.com', 'Apex Bulk API Integration') AND term_id != '1437'";
                }



                $wp_table = $table_prefix . 'terms';
                $sql = "SELECT term_id, name FROM `$wp_table` WHERE " . $product;
                // $sql = "SELECT term_id, name FROM `$wp_table` WHERE ".$product." Group By name";
                $results = $wpdb->get_results($sql);
                foreach ($results as $term) {
                    echo $response = '<option value="' . $term->term_id . '">' . $term->name . '</option>';
                }


                exit();
            }

            /*------------------ Ajax casestudy select box selector on service end ---------------------*/



            //wizard form submission
            function handle_ajax_form_submission()
            {
                global $wpdb;
                $table_name = $wpdb->prefix . 'live_demo_submissions';

                // Check if fields are set
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['page_url'])) {
                    $name = sanitize_text_field($_POST['name']);
                    $email = sanitize_email($_POST['email']);
                    $phone = sanitize_text_field($_POST['phone']);
                    $page_url = esc_url($_POST['page_url']); // Page URL sanitize

                    // Insert data into the database
                    $inserted = $wpdb->insert(
                        $table_name,
                        [
                            'name'      => $name,
                            'email'     => $email,
                            'phone'     => $phone,
                            'page_url'  => $page_url,
                            'submission_time' => current_time('mysql'), // Set current time
                        ],
                        ['%s', '%s', '%s', '%s', '%s']
                    );

                    if ($inserted) {
                        wp_send_json_success(['message' => 'Form submitted successfully.']);
                    } else {
                        wp_send_json_error(['message' => 'Database error.']);
                    }
                } else {
                    wp_send_json_error(['message' => 'Missing required fields.']);
                }

                wp_die();
            }
            add_action('wp_ajax_submit_form_ajax', 'handle_ajax_form_submission');
            add_action('wp_ajax_nopriv_submit_form_ajax', 'handle_ajax_form_submission'); // For non-logged-in users





            // demo form shortcode

            function live_demo_form_shortcode()
            {
                ob_start(); ?>

    <section class="fourthpage">
        <h2>Live Demo</h2>
        <div class="wrapper2">
            <form id="wizard">
                <h4>Please fill out the form</h4>
                <div class="form-row">
                    <div class="form-holder">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                        <span class="error-message" id="name-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder">
                        <input type="text" class="form-control" id="email" placeholder="Email">
                        <span class="error-message" id="email-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder">
                        <input type="number" class="form-control" id="phone" placeholder="Phone">
                        <span class="error-message" id="phone-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder" style="text-align: end;">
                        <input type="hidden" id="liveFormSubmitRedirectURL" value="">
                        <button id="next-btn" role="menuitem">Submit
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m18.707 12.707-3 3a1 1 0 0 1-1.414-1.414L15.586 13H6a1 1 0 0 1 0-2h9.586l-1.293-1.293a1 1 0 0 1 1.414-1.414l3 3a1 1 0 0 1 0 1.414z" style="fill:#fff" data-name="Right" />
                            </svg>
                        </button>
                    </div>
                    <div class="success_msg"></div>
                </div>
            </form>
        </div>
    </section>

<?php return ob_get_clean();
            }
            add_shortcode('live_demo_form', 'live_demo_form_shortcode');




            function add_form_submission_page()
            {
                add_menu_page(
                    'Form Submissions',          // Page Title
                    'Form Submissions',          // Menu Title
                    'manage_options',            // Capability
                    'form_submissions',          // Menu Slug
                    'display_form_submissions',  // Callback function to display content
                    'dashicons-forms',           // Icon
                    20                           // Position
                );
            }
            add_action('admin_menu', 'add_form_submission_page');


            function display_form_submissions()
            {
                global $wpdb;
                $table_name = $wpdb->prefix . 'live_demo_submissions';

                // Fetch form submission data
                $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submission_time DESC");

                // Display the data in an HTML table
?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Form Submissions</h1>
        <table class="wp-list-table widefat fixed striped posts">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Page URL</th>
                    <th>Submission Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($results) {
                    foreach ($results as $row) {
                        echo '<tr>';
                        echo '<td>' . esc_html($row->name) . '</td>';
                        echo '<td>' . esc_html($row->email) . '</td>';
                        echo '<td>' . esc_html($row->phone) . '</td>';
                        echo '<td><a href="' . esc_url($row->page_url) . '" target="_blank">View Page</a></td>';
                        echo '<td>' . esc_html($row->submission_time) . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">No submissions found.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
            }

            function custom_admin_css()
            {
                echo '<style>
        .wp-list-table th, .wp-list-table td {
            padding: 10px;
            text-align: left;
        }
        .wp-list-table th {
            background-color: #f1f1f1;
        }
    </style>';
            }
            add_action('admin_head', 'custom_admin_css');

            // function create_custom_form_table() {
            //     global $wpdb;
            //     $table_name = $wpdb->prefix . 'live_demo_submissions';

            //     $charset_collate = $wpdb->get_charset_collate();

            //     $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            //         id mediumint(9) NOT NULL AUTO_INCREMENT,
            //         name varchar(100) NOT NULL,
            //         email varchar(100) NOT NULL,
            //         phone varchar(20) NOT NULL,
            //         page_url varchar(255) NOT NULL,
            //         submission_time datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            //         PRIMARY KEY  (id)
            //     ) $charset_collate;";

            //     require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            //     dbDelta($sql);
            // }
            // add_action('init', 'create_custom_form_table');



            // =========================================================================
            /* Assets Filter - Added on 23rd March 25 - By Manish */
            // =========================================================================
            function assets_dropdown_filter_shortcodee()
            {
                ob_start();
                include('ajax/assets/dropdown-filter.php');
                return ob_get_clean();
            }
            add_shortcode('assets-dropdown-filter', 'assets_dropdown_filter_shortcodee');

            function wpflameses_assets_filter_function()
            {
                $args = array(
                    'orderby' => 'date', // we will sort posts by date
                    'order' => $_POST['date'] // ASC or DESC
                );

                $tax_query = array();

                if (!empty($_POST['expertisefilter'])) {
                    $tax_query[] = array(
                        'taxonomy' => 'expertise',
                        'field' => 'id',
                        'terms' => $_POST['expertisefilter']
                    );
                }

                if (!empty($_POST['industryfilter'])) {
                    $tax_query[] = array(
                        'taxonomy' => 'industry',
                        'field' => 'id',
                        'terms' => $_POST['industryfilter']
                    );
                }

                if (!empty($tax_query)) {
                    $args['tax_query'] = array_merge(array('relation' => 'AND'), $tax_query);
                }

                if (empty($_POST['expertisefilter']) && empty($_POST['industryfilter'])) {
                    $args = array(
                        'post_type' => 'asset',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby'     => 'modified',
                        'order'       => 'DESC',
                    );
                }


                $query = new WP_Query($args);

                if ($query->have_posts()) : ?>
                <div class="container">
                    <div class="row"><?php
                            while ($query->have_posts()): $query->the_post();
                                // Fetch the redirect URL
                                $redirect_url = get_post_meta(get_the_ID(), '_asset_redirect_url', true);
                                // If no redirect URL is set, fallback to post permalink
                                $post_link = !empty($redirect_url) ? esc_url($redirect_url) : get_permalink();

                                echo '<div class="col-lg-6 listCaseStudy">';
                                echo '<div class="c-st">';
                                echo '<a href="' . $post_link . '">';
                                $id = get_the_post_thumbnail_url( $query->ID );
                                echo  "<img src='$id'>";
                                echo '<div class="newCaseStudyContent">';
                                echo '<h4>' . esc_html($query->post->post_title) . '</h4>';
                                
                                // remove_filter('the_content', 'wpautop');              // Stop <p> auto-wrapping
                                // remove_filter('the_content', 'shortcode_unautop');  
                                
                                
                                // Step 2: Run shortcodes manually
                                // $content = $query->post->post_content;
                                // $content = do_shortcode($content);

                                // Step 3: Now apply filters (optional: only if needed)
                                // $content = apply_filters('the_content', $content);
                                // echo '<div>' . $content . '</div>';
                                // echo '<h4>' . the_title() . '</h4>';
                                echo '<p>' . apply_filters('the_content', get_the_content()) . '</p>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                                echo '</div>';
                            endwhile;
                            ?> 
                    </div>
                </div> <?php
                    wp_reset_postdata();
                else :
                    echo 'No posts found';
                endif;

                die();
            }
            add_action('wp_ajax_assets_filter', 'wpflameses_assets_filter_function');
            add_action('wp_ajax_nopriv_assets_filter', 'wpflameses_assets_filter_function');

            // WP-admin Asset post's Redirect URL input field 
            function asset_add_redirect_url_meta_box()
            {
                add_meta_box(
                    'asset_redirect_url', // Meta Box ID
                    'Redirect URL', // Title
                    'asset_redirect_url_callback', // Callback function
                    'asset', // Post type slug
                    'side',
                    'high'
                );
            }
            add_action('add_meta_boxes', 'asset_add_redirect_url_meta_box');

            function asset_redirect_url_callback($post)
            {
                // Get existing value
                $redirect_url = get_post_meta($post->ID, '_asset_redirect_url', true);

                // Security nonce
                wp_nonce_field('asset_redirect_nonce_action', 'asset_redirect_nonce');

                echo '<label for="asset_redirect_url">Enter Redirect URL:</label>';
                echo '<input type="url" id="asset_redirect_url" name="asset_redirect_url" value="' . esc_url($redirect_url) . '" style="width:100%;" />';
            }

            function save_asset_redirect_url($post_id)
            {
                // Verify nonce
                if (!isset($_POST['asset_redirect_nonce']) || !wp_verify_nonce($_POST['asset_redirect_nonce'], 'asset_redirect_nonce_action')) {
                    return;
                }

                // Prevent auto-save from overwriting data
                if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                    return;
                }

                // Check user permissions
                if (!current_user_can('edit_post', $post_id)) {
                    return;
                }

                // Save the field value
                if (isset($_POST['asset_redirect_url'])) {
                    update_post_meta($post_id, '_asset_redirect_url', esc_url($_POST['asset_redirect_url']));
                }
            }
            add_action('save_post_asset', 'save_asset_redirect_url');


            function limit_html_content($content, $limit = 200, $end = '...')
            {
                if (mb_strlen(strip_tags($content)) <= $limit) {
                    return $content;
                }

                $content = preg_replace('/\s+/', ' ', $content); // Normalize whitespace
                $words = preg_split('/(<[^>]+>|[^<>\s]+(?:\s+[^<>\s]+)*)/', $content, -1, PREG_SPLIT_DELIM_CAPTURE);

                $count = 0;
                $output = '';
                $openTags = [];

                foreach ($words as $word) {
                    if (preg_match('/<(\w+)[^>]*>/', $word, $matches)) {
                        array_unshift($openTags, $matches[1]); // Open tag
                    } elseif (preg_match('/<\/(\w+)>/', $word, $matches)) {
                        $openTags = array_diff($openTags, [$matches[1]]); // Close tag
                    } else {
                        $count += mb_strlen(strip_tags($word));
                    }

                    $output .= $word;

                    if ($count >= $limit) {
                        break;
                    }
                }

                // Close any open tags
                foreach ($openTags as $tag) {
                    $output .= "</$tag>";
                }

                return $output . $end;
            }


            /* Industry filter by expertise */
            add_action('wp_ajax_get_industry_by_expertise', 'get_industry_by_expertise');
            add_action('wp_ajax_nopriv_get_industry_by_expertise', 'get_industry_by_expertise'); 

            function get_industry_by_expertise() {
                // Ensure the expertise ID is passed
                if (isset($_POST['expertise_id'])) {
                    $expertise_id = intval($_POST['expertise_id']);
                    // Query the posts in the selected expertise
                    $args = array(
                        'post_type' => 'asset', // Adjust if using a custom post type
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'expertise',
                                'terms' => $expertise_id,
                                'field' => 'term_id',
                            ),
                        ),
                    );

                    $query = new WP_Query($args);
                    $industry = [];

                    // Check if posts exist and fetch associated services
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $post_industry = wp_get_post_terms(get_the_ID(), 'industry');
                            foreach ($post_industry as $industryTemp) {
                                if (!in_array($industryTemp->term_id, $industry)) {
                                    $industry[] = $industryTemp->term_id;
                                }
                            }
                        }
                        wp_reset_postdata();
                    }

                    // Output Industries as options in the dropdown
                    if ($industry) {
                        echo '<option value="">Select Industry...</option>';
                        foreach ($industry as $industry_id) {
                            $industry_term = get_term($industry_id);
                            echo '<option value="' . $industry_term->term_id . '">' . $industry_term->name . '</option>';
                        }
                    } else {
                        echo '<option value="">No industry available</option>';
                    }
                }
                wp_die(); // Ensure proper termination of AJAX request
            }
            
            
            
   // ===== ai demo vd rs=====


function add_this_script_footer(){ ?>
<script>
jQuery(function ($) {
  var $holder = $(".image__wrapper, .right-video");     // parent column
  var $pin    = $holder.find(".image__inner, .sticky-video"); // child we move
  var $stop   = $(".tabs");               // section below

  var fixedTop   = 100;   // distance from top when fixed
  var buffer     = 3;     // to avoid tiny overlap
  var holderOffset, pinWidth, start, h, stopY;

  function recalc() {
    holderOffset = $holder.offset();
    pinWidth     = $holder.outerWidth();
    start        = holderOffset.top;
    h            = $pin.outerHeight();
    stopY        = $stop.offset().top;
    $holder.height(h); // reserve space
  }

  recalc();
  $(window).on("resize", recalc);

  $(window).on("scroll", function () {
    var y = $(this).scrollTop();

    // State 1: before holder
    if (y <= start) {
      $pin
        .removeClass("animate-top")
        .css({
          position: "absolute",
          top: "0",
          left: "0",
          width: "100%"
        });
    }
    // State 2: scrolling inside (fixed, animate top)
    else if ((y + fixedTop + h) < (stopY - buffer)) {
      $pin
        .addClass("animate-top")
        .css({
          position: "fixed",
          top: fixedTop + "px",
          left: holderOffset.left + "px",
          width: pinWidth + "px"
        });
    }
    // State 3: lock at bottom (no transition)
    else {
      var absTop = stopY - h - $holder.offset().top - buffer;
      if (absTop < 0) absTop = 0;
      $pin
        .removeClass("animate-top")
        .css({
          position: "absolute",
          top: absTop + "px",
          left: 0,
          width: "100%"
        });
    }
  });
});
</script>
<?php }
add_action('wp_footer', 'add_this_script_footer');


// =====shortcode for displaying white paper grid=====

// Shortcode: [whitepaper_list]
function display_whitepapers_shortcode($atts) {
    ob_start();

    $atts = shortcode_atts(array(
        'posts_per_page' => -1,
        'order' => 'DESC',
    ), $atts, 'whitepaper_list');

    $args = array(
        'post_type' => 'whitepaper',
        'posts_per_page' => $atts['posts_per_page'],
        'order' => $atts['order'],
        'post_status' => 'publish',
    );

    $whitepapers = new WP_Query($args);

    if ($whitepapers->have_posts()) {
        echo '<div class="whitepaper-wrapper">'; // parent container for layout (optional)
        while ($whitepapers->have_posts()) {
            $whitepapers->the_post();

            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
            if (!$image_url) {
                $image_url = 'https://via.placeholder.com/600x400?text=Whitepaper'; // fallback image
            }

            echo '<div class="cardsAI cardsWP">';
            echo '  <div class="card-image">';
            echo '    <img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
            echo '    <span class="white-paper-tag"> White paper </span>';
            echo '  </div>';
            echo '  <div class="card-content">';
            echo '    <h4><strong>' . get_the_title() . '</strong></h4>';
            echo '  </div>';
            echo '  <div class="linkbtn wpLinkBtn">';
            echo '    <a href="' . get_permalink() . '" type="button">Read More »</a>';
            echo '  </div>';
            echo '</div>';
        }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>No whitepapers found.</p>';
    }

    return ob_get_clean();
}
add_shortcode('whitepaper_list', 'display_whitepapers_shortcode');

// === white paper detail page=====
// Handle whitepaper download form
function handle_whitepaper_download() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['security'], 'whitepaper_download_nonce')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $full_name = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);
    $company = sanitize_text_field($_POST['company']);
    $phone = sanitize_text_field($_POST['phone']);
    $whitepaper_id = intval($_POST['whitepaper_id']);
    
    // Get whitepaper details
    $pdf_url = get_post_meta($whitepaper_id, 'whitepaper_file', true);
    $whitepaper_title = get_the_title($whitepaper_id);
    
    if (!$pdf_url) {
        wp_send_json_error('PDF file not found for this whitepaper.');
    }
    
    // Save lead to database (optional)
    save_whitepaper_lead($full_name, $email, $company, $phone, $whitepaper_id);
    
    // Increment download count
    $download_count = get_post_meta($whitepaper_id, 'download_count', true);
    $download_count = $download_count ? $download_count + 1 : 1;
    update_post_meta($whitepaper_id, 'download_count', $download_count);
    
    // Send email notification (optional)
    send_download_notification($full_name, $email, $company, $whitepaper_title);
    
    // Return success with PDF URL
    wp_send_json_success(array(
        'pdf_url' => $pdf_url,
        'filename' => sanitize_title($whitepaper_title) . '.pdf',
        'whitepaper_title' => $whitepaper_title
    ));
}
add_action('wp_ajax_whitepaper_download', 'handle_whitepaper_download');
add_action('wp_ajax_nopriv_whitepaper_download', 'handle_whitepaper_download');

// Save lead to database
function save_whitepaper_lead($name, $email, $company, $phone, $whitepaper_id) {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'whitepaper_leads';
    
    // Create table if it doesn't exist
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $charset_collate = $wpdb->get_charset_collate();
        
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name varchar(100) NOT NULL,
            email varchar(100) NOT NULL,
            company varchar(100),
            phone varchar(20),
            whitepaper_id mediumint(9) NOT NULL,
            downloaded_at datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
    
    // Insert lead data
    $wpdb->insert(
        $table_name,
        array(
            'name' => $name,
            'email' => $email,
            'company' => $company,
            'phone' => $phone,
            'whitepaper_id' => $whitepaper_id
        ),
        array('%s', '%s', '%s', '%s', '%d')
    );
}

// Send email notification
function send_download_notification($name, $email, $company, $whitepaper_title) {
    $to = get_option('admin_email');
    $subject = 'New Whitepaper Download: ' . $whitepaper_title;
    
    $message = "
    A new whitepaper has been downloaded:
    
    Whitepaper: {$whitepaper_title}
    Name: {$name}
    Email: {$email}
    Company: {$company}
    
    Download time: " . current_time('mysql') . "
    ";
    
    wp_mail($to, $subject, $message);
}

// Enqueue scripts
function enqueue_whitepaper_scripts() {
    if (is_singular('whitepaper')) {
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_whitepaper_scripts');


