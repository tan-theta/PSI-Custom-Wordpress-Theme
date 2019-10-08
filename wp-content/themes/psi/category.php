<?php 

get_header(); ?>

 
  <div class="container clearfix about-us" style="background-image:url(<?php echo get_bloginfo('template_directory');  ?>/images/updated/about-us.jpg); margin-top: 50px;">
      
      
  
    <div id="page-post">
      <div class="twelve columns">
        <h1 style="margin: 20px 30px ; font-size:30px;"> <?php single_cat_title(); ?> <span class="line"></span></h1>
            <div class="page-content">
                 
    <?php $catquery = new WP_Query( "cat=1&order=ASC" ); ?>
        <div class="thirteen columns">
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <div class="seven-half columns">
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
          
          





