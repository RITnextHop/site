<?php

	$senderName = $_POST["senderName"];
	$email = $_POST["email"];
	$message = htmlspecialchars($_POST["message"]);
	date.timezone = America/New_York
// Validate Name
if (empty($senderName)) {
		$nameErr = "<div class='errors'>Name can not be empty.</div>";
}else{
		$valid_name = true;
}

// Validate email
if (empty($email)) {
    $mailErr = "<div class='errors'>Email can not be empty.</div>";
} else if (!(preg_match("/^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/", $email))){
    $mailErr = "<div class='errors'>Please input a valid email address.</div>";
} else {
    $valid_email = true;
}

// Validate message
if (empty($message)) {
    $messageErr = "<div class='errors'>Message can not be empty.</div>";
}else{
    $valid_message = true;
}

if ($valid_name && $valid_email && $valid_message) {
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
else {
	?><html><body>test</body></html><?php
}


?>
