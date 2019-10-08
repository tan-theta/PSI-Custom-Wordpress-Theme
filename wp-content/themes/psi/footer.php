<footer>
    <div class="container">
    
      <div class="four columns">
        <div class="about">
          <h3 class="title">About Us<span class="line"></span></h3>
          <p style="text-align: justify">
         PSI Stationery Trading LLC , UAE is a joint venture between Printers & Stationery Industries LLC , one of the largest enterprises in the UAE specialized in manufacturing school stationery products and Union Emirates Printing & Publishing, manufacturers of premium office stationery in the UAE.
          </p>
        </div>
      </div><!-- End about -->
      
      <div class="four columns">
        <div class="tweets">
          <h3 class="title">Products<span class="line"></span></h3>
            <div class='footer-menu'>
            <?php
				
				$args = array(
					'theme_location' => 'footer1'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
            </div><!-- Tweets Code -->
        </div>
      </div><!-- End tweets -->
      
      <div class="four columns">
        <div class="flickr">
          <h3 class="title">Quick Links<span class="line"></span></h3>
            <div class='footer-menu'>
            <?php
				
				$args = array(
					'theme_location' => 'footer2'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
            </div><!-- Tweets Code -->
           <!-- Flickr Code -->
        </div>
      </div><!-- End flickr -->
      
      <div class="four columns">
        <div class="subscribe">
          <h3 class="title">Subcribe<span class="line"></span></h3>
          <p>Subscribe to our e-mail newsletter to receive updates.</p>
            <p><a class="button large color" href="<?php echo home_url('/subscribe/') ?>">Subscribe to PSI</a></p>
            
        </div>
      </div><!-- End subscribe -->
      
     
        
      <div class="sixteen columns"><hr class="bottom" /></div>
      
      <div class="eight columns"><span class="copyright">
      © Copyright 2013 <a href="<?php echo home_url()?>">PSI UAE</a>. All Rights Reserved.<a href="<?php bloginfo('url'); ?>/sitemap">Site Map</a>
     </span></div>
      
      <div class="eight columns">
        <div class="social">
         
            <a href="http://unilumina.com/" target="_blank"> <img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/devalor.jpg"> </a>
        </div>
        </div>
    
    </div><!-- End container -->
  </footer><!-- <<< End Footer >>> -->
  <?php wp_footer(); ?>  

</body>
</html>

