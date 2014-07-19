<?php 

if (isset($_POST["name"])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$InquiryMessage = $_POST['message'];
	
	echo $name;
	
		//$to = "sales@jumpsolutions.ph";
		$to = "andro.derecho@atomitsoln.com";
	$from = $email;
	$subject = "Inquiry form JumpSolutions website";
	$message = '
		<!doctype html>
			<html>
				<head>
					<meta charset="utf-8">
					<title>JumpSolutions Inc./title>
				</head>
                
                
                <style type="text/css">
					
					*{
						margin:0;
						padding:0;
					}
					
					#wapper{
						width:500px;
						margin:auto;
					}
					
					p{
						font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
						color:#555;
						
					}
					
				
					body{
						background-color:#ededed;
					}
					
				</style> 

			<body>
				<br />
			  <div id="wapper">
              	
                <p><img src="images/logo.png"  width="359" height="110" ></p>
                <p>&nbsp;</p>
                <p>&nbsp; </p>
                <p style="color:#000;font-weight:bold;">Dear >Addison Tan, </p>
                <p>&nbsp;</p>
                <p>'.$InquiryMessage.'</p>
                <p>&nbsp;</p>
                <p>Thank you for your time. I look forward to meeting you.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Sincerely,<br />
                '.$name.' '.$contact.'</p>
				<br />
				'.$email.' '.$address.'
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                <p>&nbsp;</p>
					<div>
					  <div>
					    <div style="color:#999;font-family:Arial;font-size:11px;">Need help? Visit the <a href="http://atomitsoln.com" target="_blank">Help center</a>.<br>
					      To learn more about Jump Solutions Inc, visit the <a href="http://jumpsolutions.ph" target="_blank">Our Website</a>.<br>
					      © 2014 JumpSolutions.ph All Rights Reserved.<br>
					      </div>
				      </div>
		    </div>
					<div></div>
					<div></div>
					<p>&nbsp;</p>
					
				</div>
			</body>
			</html>
		';
	
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	
			
			if (mail($to, $subject, $message, $headers)) {
  				// success (at least got return boolean true, what does not mean that the e-mail actually go sent to the recipient [can't proove that])
				//echo "Message sent";
				
				echo "Message sent";
				
				exit();
			}else {
  				echo 'Error: Message not sent !';
				
				exit();
			}
			
		
		
	
	
}

?>