<?php
	
	$senderName = $_POST["senderName"];
	$email = $_POST["email"];
	$message = htmlspecialchars($_POST["message"]);
	
	if(isset($senderName)&&isset($email)&&isset($message)) {
	$sendMessage = "";
	$sendMessage .= "Email from $senderName ($email)";
	$sendMessage .= "\n";
	$sendMessage .= "$message";
	
	mail("ritnexthop@gmail.com","Contact Form Submission",$sendMessage);
	
	header( 'Location: http://nh.brucedewald.com' ) ;
	}
?>
	
	