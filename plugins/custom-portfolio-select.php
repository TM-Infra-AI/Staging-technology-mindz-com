<?php
/*
Plugin Name: Custom Portfolio Select
Description: Add a select box for portfolio categories.
*/

function custom_portfolio_select() {
    ob_start(); // Start output buffering

    // The HTML and JavaScript code for the select box and functionality
    ?>
   
    <div id="primary" class="content-area ">
        <main id="main" class="site-main" role="main">
            
                <h2 >Select a Portfolio Category:</h2>
              <div>  
            
            <select id="categorySelect" onchange="toggleSelectBox(this.id)">
                <option value="">Select any option</option>
                <!--<option value="all">All Categories</option>-->
                <?php
                $portfolio_categories = get_terms('portfolio-category'); // Replace with your actual taxonomy name
                foreach ($portfolio_categories as $category) {
                    //echo 
                    echo '<option value="' . $category->slug . '">' . $category->name . '</option>';
                }
                ?>
            </select>
             
              
            <select id="productSelect" onchange="toggleSelectBox(this.id)">
                <option value="">Select any option</option>
                <option value="All">All</option>
                <option value="Sales Cloud">Salesforce Sales Cloud</option>
                <option value="Service ">Salesforce Service Cloud</option>
                <option value="Marketing ">Salesforce Marketing Cloud</option>
                <option value="Experience Cloud">Salesforce Experience Cloud</option>
                <option value="NPSP">Salesforce NPSP</option>
                <option value="Outbound Funds Module">Salesforce Outbound Funds Module</option>
                <option value="Program Management Module">Salesforce Program Management Module</option>
                <option value="Service Cloud voice">Salesforce Service Cloud voice</option>
                <option value="Magento">Magento</option>
                <option value="Apex bulk API">Apex bulk API</option>
                <option value="Force.com">Force.com</option>
                <option value="CallRail">CallRail</option>
                <option value="Pardot">Pardot</option>
                <option value="Appexchange">Salesforce Appexchange</option>
                <option value="B2C Commerce Cloud">Salesforce B2C Commerce Cloud</option>
                <option value="Google Tag Manager">Google Tag Manager</option>
                <option value="CJ Affiliate">CJ Affiliate</option>
                <option value="ServiceDesk">ServiceDesk</option>
                <option value="Endpoint Central">Endpoint Central</option>
                <option value="Sophos">Sophos Central</option>
                
            </select>
             
            </div>
             
            
            <div id="portfolio-items" >
                <!-- Portfolio items will be displayed here -->
    <!--            <div id="new12"  style="      width: calc(30.3333% - 30px);-->
    <!--float: left;-->
    <!--margin: 0 15px 30px;-->
    <!--border-radius: 5px;-->
    <!--border: none;-->
    <!--padding-bottom: 0;-->
    <!---webkit-transition-duration: .8s;-->
    <!--transition-duration: .8s;-->
    <!---webkit-transition-timing-function: cubic-bezier(0.075,0.82,0.165,1);-->
    <!--transition-timing-function: cubic-bezier(0.075,0.82,0.165,1);-->
    <!--box-shadow: 0 25px 98px 0 rgba(0,0,0,.1);-->
    <!--background-color: #fff;-->
    <!--overflow: hidden;">-->
                    
    <!--            </div>-->
            </div>
            <div id="portfolio-items-2" class="second_Select" >
            </div>
            
        </main>
        </div>
   
    <script>
    
    function toggleSelectBox(selectId) {
        console.log("yes1");
        var categorySelect = document.getElementById('categorySelect');
        var productSelect = document.getElementById('productSelect');
        var categoryOutput = document.getElementById('portfolio-items');
        var productOutput = document.getElementById('portfolio-items-2');

        if (selectId === 'categorySelect') {
            console.log("yes2");
            categoryOutput.style.display = 'block';
            productOutput.style.display = 'none';
           productSelect.selectedIndex = 0;  //Reset the product select box
            productOutput.innerHTML = '';  //Clear the product output
        } else if (selectId === 'productSelect') {
            console.log("yes3");
            categoryOutput.style.display = 'none';
            productOutput.style.display = 'block';
            categorySelect.selectedIndex = 0;  //Reset the category select box
            categoryOutput.innerHTML = '';  //Clear the category output
        }
        
    }

</script>
    


    <script>
    var data = '';

    jQuery(document).ready(function ($) {
            var select = $('#categorySelect');
          var container = $('#portfolio-items'); 

    select.on('change', function () {
        var selectedCategory = $(this).val();
        
        $.ajax({
            url: 'https://staging.technologymindz.com/portfolio-category/' + selectedCategory,
            method: 'GET',
            success: function (response) {
                //console.log(response);
                var regex = /<article[^>]*>(.*?)<\/article>/gs;
                var matches = response.match(regex);
                console.log(matches);

                if (matches) {
                    // Clear the existing content in the container
                    container.empty();

                    for (var i = 0; i < matches.length; i++) {
                        var data = matches[i]; // Extracted data
                        // Create a new div element with a unique ID and append the data
                        var newDiv = $('<div>').attr('id', 'new12-' + i).attr('class' , 'col-md-6')
                   .attr('style', 'float: left;').html(data);
                        
                        container.append(newDiv);
                    }
                }
            }
        });
    });
 });

    </script>
    
    
    <script>
         jQuery(document).ready(function ($) {
            var select = $('#productSelect');
             //var industry = $('#categorySelect').val();
           // var container = $('#portfolio-items-2');
            
         select.on('change', function () {
                var selectedoption = $(this).val();
                console.log(selectedoption);
                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    data: {
                        action: 'get_portfolio_items',
                        category: selectedoption
                       
                    },
                    success: function (response) {
                         console.log(response);
                
                // console.log(matches);
                        if(response !="" ){
                            
                        $('#portfolio-items-2').html(response);
                        }
                        else{
                            
                            $('#portfolio-items-2').html("No portfolio items found for this category.");
                        }
                        
                    }
                    });
                });
            });  
    
      
    
    </script>
    
    
    
    <?php

    return ob_get_clean(); // End output buffering and return the HTML
}


add_shortcode('portfolio_select', 'custom_portfolio_select');

add_shortcode('portfolio_select', 'custom_portfolio_select');
