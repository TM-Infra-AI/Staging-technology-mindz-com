<?php

$args = array(
    'post_type' => 'asset',
    'orderby'     => 'modified',
    'order'       => 'DESC',
    'posts_per_page' => -1
);

$the_query = new WP_Query($args); ?>
<div class="container">
    <div class="row">
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                // Fetch the redirect URL
                $redirect_url = get_post_meta(get_the_ID(), '_asset_redirect_url', true);
                // If no redirect URL is set, fallback to post permalink
                $post_link = !empty($redirect_url) ? esc_url($redirect_url) : get_permalink();
        ?>
                <div class="col-lg-6 listCaseStudy">
                    <div class="c-st">
                        <a href="<?php echo $post_link; ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Post">
                            <div class="newCaseStudyContent">
                                <h4><?php the_title(); ?></h4>
                                <!-- <p><?php //the_excerpt(); ?></p> -->
                                <p><?php echo apply_filters('the_content', get_the_content());
                                        ?></p>
                                <!-- <p><?php //echo wp_kses_post(get_the_content()); 
                                        ?></p> -->
                                <!-- <p><?php //echo wp_trim_words(do_shortcode(wpautop(get_the_content())), 30, '...'); 
                                        ?></p> -->
                                <!-- <div> -->
                                <?php
                                // Get the full post content and process shortcodes
                                // $full_content = apply_filters('the_content', do_shortcode(get_the_content()));

                                // Limit content to 200 characters while keeping HTML structure
                                // $trimmed_content = mb_strimwidth($full_content, 0, 200, '...');
                                // $trimmed_content = wp_html_excerpt($full_content, 200) . '...';

                                // echo $trimmed_content; // Display trimmed content with HTML

                                // $full_content = apply_filters('the_content', get_the_content());
                                // echo limit_html_content($full_content, 200);

                                // $full_content = apply_filters('the_content', get_the_content());
                                // $full_content = do_shortcode($full_content); // Process WPBakery shortcodes
                                // echo limit_html_content($full_content, 200);
                                ?>
                                <!-- </div> -->
                            </div>
                        </a>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>

<?php wp_reset_postdata(); ?>