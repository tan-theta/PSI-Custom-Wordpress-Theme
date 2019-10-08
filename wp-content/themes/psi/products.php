<?php 
/**
 * Template Name: Product
 */
get_header(); ?>

 
  <div class="container clearfix about-us" style="background-image:url(<?php echo get_bloginfo('template_directory');  ?>/images/updated/about-us.jpg); margin-top: 50px;">
      
      
  
    <div id="page-post">
      <div class="twelve columns">
          <h1 style="margin: 20px 30px ; font-size:30px;"> <?php single_post_title(); ?><span class="line"></span>&nbsp;</h1>
            <div class="page-content">
                <div class="thirteen columns product-cat">
                <?php

                    if (have_posts()) :
                       while (have_posts()) :
                          the_post();
                             the_content();
                       endwhile;
                    endif;

                ?>
            
            </div>
   
      </div>
        </div>
    </div><!-- End Welcome -->
    
    <?php get_sidebar(); ?>
     
   
      </div>
  </div><!-- <<< End Container >>> -->
  
  <?php get_footer(); ?>
          
          





