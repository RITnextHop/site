<?php
		$senderName = $_POST["senderName"];
		$email = $_POST["email"];
		$message = htmlspecialchars($_POST["message"]);


	// Send Message
	if(isset($senderName)&&isset($email)&&isset($message)) {
			$sendMessage = "";
			$sendMessage .= "Email from $senderName ($email)";
			$sendMessage .= "\n\n";
			$sendMessage .= "$message";

			if(mail("ritnexthop@gmail.com","Contact Form Submission",$sendMessage)) {
				$status = "SUCCESS";	//eventually going to have some kind of confirmation after send
			}
			else {
				$status = "FAIL";		//eventually going to have some kind of alert if send is a fail
			}

			header( "Location: http://nh.brucedewald.com?status=$status" );
	}
?>
