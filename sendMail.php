<?php

	$senderName = $_POST["senderName"];
	$email = $_POST["email"];
	$message = htmlspecialchars($_POST["message"]);

// Validate Name
if (empty($senderName)) {
		$status = "nameEmpty";
}else{
		$valid_name = true;
}

// Validate email
if (empty($email)) {
    $status = "emailEmpty";
} else if (!(preg_match("/^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/", $email))){
    $status = "emailWrong";
} else {
    $valid_email = true;
}

// Validate message
if (empty($message)) {
    $status = "messageEmpty";
}else{
    $valid_message = true;
}


// Send Message
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
	header( "Location: http://nh.brucedewald.com?status=$status");
}

?>
