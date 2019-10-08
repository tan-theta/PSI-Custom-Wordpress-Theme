<?php 
/**
 * Template Name: Subscription
 */

 //response generation function
  $feedback = "";
 
  //function to generate response
  function my_contact_form_generate_feedback($typeof, $messages){
 
    global $feedback;
 
    if($typeof == "subscribe_success") $feedback = "<div class='subscribe_success'>{$messages}</div>";
    else $feedback = "<div class='subscribe_error'>{$messages}</div>";
 
  }


  //response messages
  
  $missing_contents = "Please supply all information.";
  $emails_invalid   = "Email Address Invalid.";
  $messages_unsent  = "Subscription was not successful. Try Again.";
  $messages_sent    = "Thanks for subscribing.";

  //user posted variables
  $names = $_POST['message_names'];
  $emails = $_POST['message_emails'];
  $headings = 'New Subscription from '. $names ;
  $messagetxts = "You have received a subscription from ".$names. ".\r\n"."Send your newsletters to ".$emails.".";
  

  //php mailer variables
  $tos = 'psi@keralataxis.in';
  $subjects = $headings . "\r\n" ;
  $headerss = 'From: '. $emails . "\r\n" .
    'Reply-To: ' . $emails . "\r\n";

if ($_POST['form'] == 'wasSubmited') {
    //validate email
      if(!filter_var($emails, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_feedback("subscribe_error", $emails_invalid);
      else //email is valid
        {
          $sents = wp_mail($tos, $subjects, strip_tags($messagetxts), $headerss);
          if($sents) my_contact_form_generate_feedback("subscribe_success", $messages_sent); //message sent!
          else my_contact_form_generate_feedback("subscribe_error", $messages_unsent); //message wasn't sent
        }
 }
      
?>
<?php get_header(); ?>

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
               <div id="description" style="margin-left:20px;">
            <div class="eleven columns">
                <div class="clearfix"></div>
                 <h3><?php

                    if (have_posts()) :
                       while (have_posts()) :
                          the_post();
                             the_content();
                       endwhile;
                    endif;

                ?></h3>
            
            </div>
          </div>  
<div class="twelve columns">
        <div class="subscribe" style="margin-top:30px;">
                  
            
          <div id="respond">
                
              <div class="twelve columns">
               <form id="ajax-contact-form" action="<?php the_permalink(); ?>" method="post">

              <div class="form-box six columns">
                <label>Name <small>(required)</small></label>
                <input type="text" name="message_names" class="text" value="<?php echo esc_attr($_POST['message_names']); ?>">
              </div><!-- End Box -->

              <div class="form-box six columns">
                <label>Email <small>(required)</small></label>
                <input type="text" name="message_emails" class="text" value="<?php echo esc_attr($_POST['message_emails']); ?>">
              </div><!-- End Box -->

               <input type="hidden" name='form' value='wasSubmited' />
                  
              <div class="form-box six columns" >
              <input type="submit" name="submitted" value="Subscribe" class="button medium color">
              </div>
              </form>
              </div>
            
            </div>
            <div class="eight columns feedback">
                <h2><?php echo $feedback; ?></h2>
              </div>
        </div>
      </div>
            
                 
                
                
            </div>
   
      </div>
     
    </div><!-- End Welcome -->
    
    <?php get_sidebar(); ?>
     
   
   
  </div><!-- <<< End Container >>> -->
  
  <?php get_footer(); ?>
          
          
