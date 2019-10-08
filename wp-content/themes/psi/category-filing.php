<?php 

get_header(); ?>

 
  <div class="container clearfix about-us" style="background-image:url(<?php echo get_bloginfo('template_directory');  ?>/images/updated/about-us.jpg); margin-top: 50px;">
      
      
  
    <div id="page-post">
      <div class="twelve columns">
        <h1 style="margin: 10px 30px ; font-size:30px;"> <?php single_cat_title(); ?> <span class="line"></span>&nbsp;</h1>
            <div class="page-content" style="overflow-y: scroll; overflow-x:hidden; height:1200px; margin: 0px;">
                 
    <?php $catquery = new WP_Query( "cat=4&posts_per_page=500&order=ASC" ); ?>
        <div class="twelve columns">
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <div class="four columns product-dis">
                <div><?php the_post_thumbnail('small-thumbnail'); ?></div>
            <h3 style="text-align:center;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3></div>
            <?php endwhile; ?> 
        </div>
    <?php wp_reset_postdata(); ?>
   
                
          </div>
    </div><!-- End Welcome -->
    
    <?php get_sidebar(); ?>
     
   
      </div>
  </div><!-- <<< End Container >>> -->
  
  <?php get_footer(); ?>
          
          





