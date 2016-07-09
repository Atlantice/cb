<?php	
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']))
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$to = 'receiver@citibrew.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from CitiBrew.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nPhone: $phone \nMessage: $message \n";
	$headers = "From: contact@citibrew.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>