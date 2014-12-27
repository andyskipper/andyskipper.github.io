<?php
  $email = $_REQUEST['email'] ;
  $name = $_REQUEST['name'] ;
  $message = $_REQUEST['message'] ;

  mail( "andy@saccade.co", "Enquiry at Saccade.co - $name",
    $message, "From: $name <$email>" );

  header( "Location: thankyou.html" );
?>