<?php 
/**
 * Template Name: Display Content
 */
get_header(); ?>

     <div id="slider">
    <div class="container clearfix">
    
      <div class="sixteen columns">
      
      <div class="flex-container">
	  <div class="flexslider">
		
			<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/productpage.jpg" alt="You Can Add"></a>
			
	  </div>
      
      </div>
      
      </div>
      
    </div><!-- End Container -->
  </div><!-- End Slider -->

 
  <div class="container clearfix about-us" style="background-image:url(<?php echo get_bloginfo('template_directory');  ?>/images/updated/about-us.jpg); margin-top: -40px;">
      
      
  
    <div id="page-post">
      <div class="twelve columns">
          <h1 style="margin: 20px 30px ; font-size:30px;"> <?php single_post_title(); ?><span class="line"></span></h1>
            <div class="page-content">
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
     
    </div><!-- End Welcome -->
    
    <?php get_sidebar(); ?>
     
   
   
  </div><!-- <<< End Container >>> -->
  
  <?php get_footer(); ?>
          
          
