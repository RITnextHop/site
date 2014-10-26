<?php
	
	$senderName = $_POST["senderName"];
	$email = $_POST["email"];
	$message = htmlspecialchars($_POST["message"]);
	
	if(isset($senderName)&&isset($email)&&isset($message)) {
		$sendMessage = "";
		$sendMessage .= "Email from $senderName ($email)";
		$sendMessage .= "\n\n";
		$sendMessage .= "$message";
		
		if(mail("ritnexthop@gmail.com","Contact Form Submission",$sendMessage)) {
			$status = "SUCCESS";
		}
		else {
			$status = "FAIL";
		}
		
		header( "Location: http://nh.brucedewald.com?status=$status" );
	}
?>
	
	