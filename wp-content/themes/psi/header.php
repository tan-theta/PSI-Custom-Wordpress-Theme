<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title><?php
        if(is_page(282)){
        wp_title('-', true,'right');bloginfo('name');echo " - ";bloginfo('description');
        } else {
        wp_title('-', true,'right');bloginfo('description');
        }
    ?></title>

    
    
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS Style -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
 
  
  <!-- Color Skins -->
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/skins/blue.css" title="blue"> 
  <link rel="alternate stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/skins/orange.css" title="orange">
  <link rel="alternate stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/skins/green.css" title="green">
  <link rel="alternate stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/skins/red.css" title="red">
  <link rel="alternate stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/skins/purple.css" title="purple"> 
  
  <!-- Small Icons -->
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/icons.css"> 
  
  <!-- Start JavaScript -->
  
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-1.7.2.min.js"></script> <!-- jQuery library --> 
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.easing.1.3.min.js"></script> <!-- jQuery Easing --> 
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script> <!-- jQuery Ui --> 
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/ddsmoothmenu.js"></script> <!-- Nav Menu ddsmoothmenu -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script> <!-- Flex Slider  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.eislideshow.js"></script> <!-- Elastic Slider  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.iconmenu.js"></script> <!-- Sliding Text and Icon Menu Style  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/colortip.js"></script> <!-- Colortip Tooltip Plugin  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/tytabs.js"></script> <!-- jQuery Plugin tytabs  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/carousel.js"></script> <!-- jQuery Carousel  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script> <!-- jQuery Prettyphoto  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.isotope.min.js"></script> <!-- Isotope Filtering  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/selectnav.js"></script> <!-- Responsive Navigation Menu by SelectNav -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.ui.totop.js"></script> <!-- UItoTop plugin  -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/custom.js"></script> <!-- Custom Js file for javascript in html -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.tweet.js"></script> <!-- jQuery Tweets -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jflickrfeed.min.js"></script> <!-- jQuery Flickr -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/twitter-flickr-options.js"></script> <!-- jQuery Tweets Options -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script>selectnav('menu-nav-bar'); </script>
  <!-- End JavaScript -->

  <!--[if lt IE 9]>
      <script src="<?php echo get_bloginfo('template_directory'); ?>/js/html5.js"></script>
  <![endif]-->

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon/apple-touch-icon-114x114.png">

<?php wp_head();?>
</head>
<body>

  

  <header style="background: rgba(0,0,0,0.5);">
    <div class="container clearfix">
     
          <div class="search search-bar">
       
            <form method="get" action="<?php bloginfo('url'); ?>">
                <fieldset>
                <input type="text" name="s" value="" placeholder="search&hellip;" maxlength="50" required="required" />
                <select name="category_name">
                <option value="">all categories</option>
                <option value="office">Office</option>
                <option value="notebook">Notebook</option>
                <option value="filing">Filing</option>
                </select>
                <button type="submit">Search</button>
                </fieldset>
            </form>
          </div>
        
        <?php /*get_template_part('searchform'); */?>
        
      <div class="one-third column">
        <div class="logo">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/images/updated/logoPSI.png" alt="PSI Logo" />
        </a>
        </div>
      </div><!-- End Logo -->
      
      
    <!--  <div class="thirteen.columns nav" >-->
      <div class="sixteen columns nav" >
          <?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
          
      
      </div><!-- End Menu -->
      
     

    </div><!-- End Container -->
  </header><!-- <<< End Header >>> -->
