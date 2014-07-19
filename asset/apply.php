<?php
	require 'PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer();
	
	/* Variable*/
	$cnumber=$_POST['contactnumber'];
	

	// Set PHPMailer to use the sendmail transport
	$mail->IsSendmail();

	//Set who the message is to be sent from
	$mail->SetFrom($_POST['email'], $_POST['name']);
	//$mail->SetFrom('derechoandro@gmail.com', 'Andro-Google');

	
	//Set who the message is to be sent to
	//$mail->AddAddress('hr@jumpsolutions.ph', 'Jump Solutions Inc.');
	$mail->AddAddress('andro.derecho@atomitsoln.com', 'Jump Solutions Inc.');
	//Set the subject line
	$mail->Subject = "JumpSolutions Applicant ".$_POST['name']."Applying";

	//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
	$mail->MsgHTML('<h2>JumpSolutions Applicant</h2><p>New Applicant</p>', dirname(__FILE__));

	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is the plain text portion of the email.';

	
	$mail->AddAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name'], 'base64', $_FILES['resume']['type']);

	//Send the message, check for errors
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  echo "Message sent!";
	}
?>