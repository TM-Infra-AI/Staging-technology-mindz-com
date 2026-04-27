<?php get_header(); 

/*
Template Name: Custom Portfolio Template
*/
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <h2>Select a Portfolio Category:</h2>
        <select id="categorySelect">
            <option value="all">All Categories</option>
            <?php
            $portfolio_categories = get_terms('portfolio-category'); // Replace with your actual taxonomy name
            foreach ($portfolio_categories as $category) {
                echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
            }
            ?>
        </select>
        <div id="portfolio-items">
            <!-- Portfolio items will be displayed here -->
        </div>
    </main>
</div>

<script>
    jQuery(document).ready(function ($) {
        var select = $('#categorySelect');

        select.on('change', function () {
            var selectedCategory = $(this).val();
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data: {
                    action: 'get_portfolio_items',
                    category: selectedCategory
                },
                success: function (response) {
                    $('#portfolio-items').html(response);
                }
            });
        });
        
    });
    
    
  
</script>

<?php get_footer(); ?>
