<?php
   
$args = array(
	'post_type'=> 'portfolio_ss',
    'orderby'     => 'modified',
     'order'       => 'DESC',    
    'posts_per_page' => -1
);
   
$the_query = new WP_Query( $args ); ?>
     <div class="container">
                <div class="row">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          
                        <div class="col-lg-6 listCaseStudy">

                            <div class="c-st">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Post">
                                <div class="newCaseStudyContent">
                                    <h4><?php the_title(); ?></h4>   
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </a>
                        </div>
                        </div>
                        
              
         
  
    <?php endwhile; endif; ?>
    </div>
            </div>
<?php wp_reset_postdata(); ?>