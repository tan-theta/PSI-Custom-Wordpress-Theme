
<?php 
/**
 * Template Name: Home
 */

get_header(); ?>

 <div id="slider">
    <div class="container clearfix">
    
      <div class="sixteen columns">
      
      <div class="flex-container">
	  <div class="flexslider">
		<ul class="slides">
          <li>
			<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/Slider-1.jpg" alt="You Can Add"></a>
			<!--<p class="flex-caption"> <span>Lorem Ipsum</span> as many area to put Ipsum Images Lorem </p>-->
		  </li>
		  <li>
			<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/Slider-2.jpg" alt="Crevision Theme"></a>
          <!-- <p class="flex-caption"> <span>Lorem Ipsum</span> as many area to put Ipsum Images Lorem </p>-->
		  </li>
          <li>
			<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/Slider-3.jpg" alt="You Can Add"></a>
			<!--<p class="flex-caption"> <span>Lorem Ipsum</span> as many area to put Ipsum Images Lorem </p>-->
		  </li>
          <li>
			<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/Slider-4.jpg" alt="You Can Add"></a>
			<!--<p class="flex-caption"> <span>Lorem Ipsum</span> as many area to put Ipsum Images Lorem </p>-->
		  </li>
          <li>
			<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/Slider-5.jpg" alt="You Can Add"></a>
			<!--<p class="flex-caption"> <span>Lorem Ipsum</span> as many area to put Ipsum Images Lorem </p>-->
		  </li>
        </ul>
	  </div>
      
      </div>
      
      </div>
      
    </div><!-- End Container -->
  </div><!-- End Slider -->


  <div class="container about-us" style="background-image:url(<?php echo get_bloginfo('template_directory'); ?>/images/updated/about-us.jpg);">
      
     <div id="page-post">
      <div class="eleven columns">
        <div class="row">
            <div class="twelve columns home-about">
                <div class="page-conten">
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
            <div class="twelve columns home-cat" > <!-- Categories -->
                
                  <div class="office four columns">
                        <div class="four columns">
                            <div class="menu-style">
                                <div class="tweets">
                                    <div class='home-menu'>
                                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home 1") ) : ?>
                                        <?php endif;?>
                                    </div><!-- Tweets Code -->
                                    
                                </div>
                            </div>
                        </div><!-- End tweets -->
                      
                        <div class="four columns">
                           <div class="menu-style">
                               <div class="tweets">
                                <div class='home-menu'>
                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home 2") ) : ?>
                                    <?php endif;?>
                                </div><!-- Tweets Code -->
                            </div>
                            </div>
                        </div><!-- End tweets -->

                  </div>
                  <div class="filing four columns">
                      <div class="four columns">
                        <div class="menu-style">    
                            <div class="tweets">
                                <div class='home-menu'>
                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home 3") ) : ?>
                                    <?php endif;?>
                                </div><!-- Tweets Code -->
                            </div>
                        </div>
                      </div>
                      <div class="four columns">
                            <div class="menu-style">
                                <div class="tweets">
                                <div class='home-menu'>
                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home 4") ) : ?>
                                    <?php endif;?>
                                </div><!-- Tweets Code -->
                            </div>
                            </div>
                        </div><!-- End tweets -->

                  </div>
                  <div class="general four columns">
                        <div class="four columns">
                            <div class="menu-styl">
                                <div class="tweets">
                                <div class='home-menu'>
                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home 5") ) : ?>
                                    <?php endif;?>
                                </div><!-- Tweets Code -->
                            </div>
                            </div>
                        </div><!-- End tweets -->
                      <div class="four columns bottom-2">
                            <div class="menu-styl">
                                <div class="tweets">
                                <div class='home-menu'>
                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home 6") ) : ?>
                                    <?php endif;?>
                                </div><!-- Tweets Code -->
                            </div>
                          </div>
                        </div><!-- End tweets -->

                  </div>
                </div>
            
      
          </div>
                
          </div>
       </div><!-- End Welcome -->
    
    <?php get_sidebar(); ?>     
        <!--<p style="margin: 20px 30px;"> <a href="#"> Read More </a></p>-->
   
     <div class="sixteen columns">     
    <h2 style="text-align:center">Made in UAE <span><img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/flag.png"></span></h2>
      </div> 
      </div>
      
     
    <!-- End Welcome -->
    
       
   
      
   
    
   
 
  
  <?php get_footer(); ?>