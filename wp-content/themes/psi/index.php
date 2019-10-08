
<?php 

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
          
          



  <div class="container clearfix about-us" style="background-image:url(<?php echo get_bloginfo('template_directory'); ?>/images/updated/about-us.jpg);">
      
      
  
    <div id="welcome">
      <div class="twelve columns">
        <!--<h2 style="margin: 20px 30px ; font-size:30px;"> About PSI Stationary </h2>-->
       
        <p style="margin: 20px 30px ; text-align:justify;">
            <span class="color" style="font-size: 1.5em" >PSI Stationery Trading LLC</span> is a joint venture between <span class="color" >Printers & Stationery Industries LLC</span>; one of the largest enterprises in UAE specialized in manufacturing school stationery products and Union Emirates Printing & Publishing; manufacturers of premium office stationery in UAE. We are actively supported by our sister concern, <span class="color" >Royal Printing Press</span>, who are masters of their trade with two decades of experience in the printing industry. Our main factory is located in <span class="color" >Ajman Free Zone</span> , UAE covers a production area of more than 34500 Sq.ft. All our warehousing needs are facilitated through our central warehouse in Ajman covering more than 25000 sq.ft, which is close proximity to our factory.
        </p>
          
        
        <!--<p style="margin: 20px 30px;"> <a href="#"> Read More </a></p>-->
   
      </div>
     
    </div><!-- End Welcome -->
    
    <?php get_sidebar(); ?>
     
    <div class="recent-work gallery clearfix">
    
      <div class="box"> <!-- Categories -->
      <!--  <h2 style="margin: 20px 35%; font-size:30px;"> Categories </h2> -->
                    
        
      </div><!-- End Categories -->
    
    </div><!-- End recent-work -->
   
  </div><!-- <<< End Container >>> -->
  
  <?php get_footer(); ?>