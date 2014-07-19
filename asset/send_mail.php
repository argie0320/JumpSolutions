<?php
ini_set('display_errors',1);

//Contact Us Inquiry


// define variables and set to empty values
$fnErr = $lnErr  = $emErr = "";

	
// Create a function for escaping the data.
function escape_data ($data) {

 // Trim and escape:
 return $data = stripslashes(trim($data));

}


if(isset($_POST['submitted'])){
	
	$email_address = $_POST['email'] ;
$comments = $_POST['comments'] ;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
	
	//Firstname
	if(preg_match('%^[A-Za-z\.\'\-\s-]{2,15}$%', stripslashes(trim($_POST['firstname'])) ) ){
		
		$fn = escape_data($_POST['firstname']);
		
	}else if(empty($_POST['firstname'])){
		$fnErr = "First Name is required";
		$fn = FALSE;
	}else{
		$fnErr = "Invalid First Name";
		$fn = FALSE;
	}
	
	//Lastname
	if(preg_match('%^[A-Za-z\.\'\-\s-]{2,15}$%', stripslashes(trim($_POST['lastname'])) ) ){
		
		$ln = escape_data($_POST['lastname']);
		
	}else if(empty($_POST['lastname'])){
		$lnErr = "Last Name is required";
		$ln = FALSE;
	}else{
		$lnErr = "Invalid Last Name";
		$ln = FALSE;
	}
	
	//Email 
	if(preg_match('%^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%', stripslashes(trim($_POST['email'])) ) ){

		$em = escape_data($_POST['email']);
		
	}else if(empty($_POST['email'])){
		$emErr = "Email is required";
		$em = FALSE;
	}else{
		$emErr = "Invalid Email";
		$em = FALSE;
	}
	
	
	if($fn && $ln && $em){
		
		$to = $email_address;
	$from = "andro.derecho@atomitsoln.com";
	$subject = "Feedback Form Atomitsoln website";
	$message = '
		<!doctype html>
			<html>
				<head>
					<meta charset="utf-8">
					<title>Untitled Document</title>
				</head>

			<body>
				<br />
					
				<p>&nbsp;</p>
				<p>Dear Mr. Lito Tampis, </p>
                <br />
            <p>'.$message.'</p>
                <br />
            <p>Thank you for your time. I look forward to meeting you.</p>
                <br />
                <p>Sincerely,<br />
                '.$firstname.' '.$lastname.'</p>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
					<div>
					  <div>
					    <div style="color:#999;font-family:Arial">Need help? Visit the <a href="http://atomitsoln.com" target="_blank">Help center</a>.<br>
					      To learn more about Atomit Business Solutions Corp, visit the <a href="http://atomitsoln.com" target="_blank">Our Website</a>.<br>
					      © 2014 Atomitsoln.com All Rights Reserved.<br>
					      </div>
				      </div>
		    </div>
					<div></div>
					<div></div>
					<p>&nbsp;</p>
					
					
			</body>
			</html>
		';
	
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	
			
			if (mail($to, $subject, $message, $headers)) {
  				// success (at least got return boolean true, what does not mean that the e-mail actually go sent to the recipient [can't proove that])
				echo '<script type="text/javascript">
	
						alert("SuccessfulL");
	
					</script>';
				//exit();
			}else {
  				echo "Failure!";
			}
			
	}else{
		
	}


}


?>