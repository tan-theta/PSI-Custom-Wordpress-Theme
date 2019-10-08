<?php 
/**
 * Template Name: Contact Us
 */

//response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "successful") $response = "<div class='successful'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $heading = $_POST['message_subject'];
  $message = "You have received an enquiry email from ".$name.".\n\n".$_POST['message_text'];
  

  //php mailer variables
  $to = 'psi@keralataxis.in';
  $subject = $name. ' : '.$heading . "\r\n" ;
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

if ($_POST['form'] == 'wasSubmited'){
    //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("successful", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
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
      
      
  
    <div id="welcome">
      <div class="twelve columns contact">
          <h1 style="margin: 20px 30px ; font-size:30px;"> <?php single_post_title(); ?><span class="line"></span></h1>
          <div id="description" style="margin-left:20px;">
            <div class="twelve columns">
                <div class="clearfix"></div>
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
          <div class="eleven columns  bottom" style="margin-left: 30px;">    
      
              <h2 class="title">Keep in Touch<span class="line"></span></h2>

              <div class="form">

              <div id="note"></div><!-- End notification -->

              <div id="fields">
            <div id="respond">
                
                <?php echo $response; ?>
              <form id="ajax-contact-form" action="<?php the_permalink(); ?>" method="post">

              <div class="form-box">
                <label>Name <small>(required)</small></label>
                <input type="text" name="message_name" class="text" value="<?php echo esc_attr($_POST['message_name']); ?>">
              </div><!-- End Box -->

              <div class="form-box">
                <label>Email <small>(required)</small></label>
                <input type="text" name="message_email" class="text" value="<?php echo esc_attr($_POST['message_email']); ?>">
              </div><!-- End Box -->

              <div class="form-box last">
                <label>Subject </label>
                <input type="text" name="message_subject" class="text" value="<?php echo esc_attr($_POST['message_subject']); ?>">
              </div><!-- End Box -->

              <div class="form-box big">
                <label>Message <small>(required)</small> </label>
                <textarea name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
              </div><!-- End Box -->
                 
                  
              <div class="clearfix"></div>
                  <input type="hidden" name='form' value='wasSubmited' />
                  
              <input type="submit" name="submit" value="Send Message" class="button medium color">

              </form>
                    
              </div><!-- End fields -->

            </div>
              </div>
      
      <!-- End contact form -->
      
          </div>
   
      </div>
     
    </div><!-- End Welcome -->
    
    <?php get_sidebar(); ?>
     
   
   
  </div><!-- <<< End Container >>> -->
  
  <?php get_footer(); ?>
          
          
