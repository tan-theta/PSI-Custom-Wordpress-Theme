<?php 
/**
 * Template Name: Single Product
 * Template Post Type: post, page, product
 */
get_header(); ?>

 
  <div class="container clearfix about-us" style="background-image:url(<?php echo get_bloginfo('template_directory');  ?>/images/updated/about-us.jpg); margin-top: 50px;">
      
      <div class="one-third column" style="float:right;"> 
       <!-- Right Side -->
      <div class="testimonials">
      
      <div class="slidewrap2">
       <!-- Start Product Slider  -->
   <div class="four columns top bottom">
   
    
	
    
       <div class="flexslider2" style="overflow: hidden;">
		<ul class="slides">
          <li>
            <div class="caption">
			<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/sideadvt.jpg">
            </a>
            </div><!-- hover effect -->
		  </li>
		  <li>
            <div class="caption">
		<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/sideadvt.jpg">
            </a>
            </div><!-- hover effect -->
		  </li>
        </ul>
      
     </div><!--  -->  
</div>
   <!-- End slider-product-->
        
      </div><!-- End slidewrap -->
      
      </div>
    </div>
    
      <div id="welcome">
         <div class="twelve columns">      
             <h1 style="margin: 20px 30px ; font-size:30px;"> <?php single_post_title(); ?><span class="line"></span>&nbsp;</h1>
       <div class="clearfix"></div>
       <div class="gallery" id="contain" style="margin-left: 20px;"> 
      
       <div class="eleven columns bottom-2">
         <!-- =================For Category M7================= -->
           <div class="lightbox gallery">
 <!-- Images Lightbox -->
        <div class="four columns item alpha">
          <div class="caption">
              <?php

                    if (have_posts()) :
                       while (have_posts()) :
                          the_post(); ?>
                <?php the_post_thumbnail('medium-thumbnail'); ?>
          </div><!-- hover effect -->
          <h3 style="text-align:center;"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></h3>
        </div>
        <!-- End -->
           </div>
           
        
       </div><!-- End column -->
      
  
        </div><!-- End contain-->
    
      <!-- ========================= Table ========================= -->
       <div class="fifteen columns bottom-2" style="margin-left: 30px; ">
          <?php the_content();
                       endwhile;
                    endif;

                ?>
        
       </div><!-- End column -->
       
       <!-- ============================ End ============================ -->
    </div><!-- End portfolio -->
       
         

     
    </div>
    
    </div>
  <?php get_footer(); ?>
          
          
