<?php
  $email = $_REQUEST['email'] ;
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  	header( "Location: thankyou.html" );

  $name = $_REQUEST['name'] ;
  $message = $_REQUEST['message'] ;
  $message .= "\n\n" . date("r");

  $reply = "Hi there\n\n"
  			."Thank you for reaching out via the Saccade Consulting contact form. Your message has been received, and we will get back to you within 24 hours.\n\n"
  			."Please do check out our Twitter and LinkedIn accounts: \n\n"
  			."http://twitter.com/ConsultingCTO\n\n"
  			."https://uk.linkedin.com/in/andyskipper\n\n"
  			."All the best, and speak shortly!\n\n"
  			."Andy at Saccade Consulting";

  mail( "andy@saccadeltd.co.uk", "Enquiry at Saccade.co",
    $message, "From: Consulting Enquiry <andy@saccade.co>" );

  mail( "$email", "Your CTO Enquiry at Saccade.co",
    $reply, "From: Andy at Saccade Consulting <andy@saccade.co>" );

  header( "Location: thankyou.html" );
?>