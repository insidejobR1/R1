
<?php
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$visitor_email = $_POST['email'];
	$message = $_POST['msg'];
	$subject =  $_POST['subject'];
	$email_from = $_POST['email'];
	$email_body = "From:  $name"."\r\n".
                 "Email: $visitor_email"."\r\n".
                 "Subject: $subject"."\r\n".
                 "Mobile no: $mobile"."\r\n".
                 "Message: $message"."\r\n".
    
        
	
  $to = "php.rashmi@flaxeninfosoft.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$subject,$email_body,$headers);
  
  header('location:index.php');

 ?>
