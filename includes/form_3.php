<?php	
	if(empty($_POST['email3']))
	{
		return false;
	}
	
	$email3 = $_POST['email3'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from CitiBrew.";
	$email_body = "You have received a new message. \n\n".
				  "Email3: $email3 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email3";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>