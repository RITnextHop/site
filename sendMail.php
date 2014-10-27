<?php

	$senderName = $_POST["senderName"];
	$email = $_POST["email"];
	$message = htmlspecialchars($_POST["message"]);


    $response=array('error'=>0,'info'=>null);

    $values=array
    (
        'contact-user-name'     => $_POST['contact-user-name'],
        'contact-user-email'	=> $_POST['contact-user-email'],
        'contact-message'       => $_POST['contact-message']
    );

	if(isEmpty($values['$senderName']))
    {
        $response['error']=1;
        $response['info'][]=array('fieldId'=>'senderName','message'=>_msg_invalid_data_name);
    }

  if(!validateEmail($values['$email']))
    {
        $response['error']=1;
        $response['info'][]=array('fieldId'=>'email','message'=>_msg_invalid_data_email);
    }

  if(isEmpty($values['$message']))
    {
        $response['error']=1;
        $response['info'][]=array('fieldId'=>'message','message'=>_msg_invalid_data_message);
    }


	if($response['error']==1) createResponse($response);

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

	function isEmpty($value)
    {
        return(!(bool)mb_strlen($value));
    }

	function validateEmail($email)
    {
        if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',$email,$result)) return(false);
        else return(true);
    }

		function createResponse($response)
    {
        echo json_encode($response);
        exit;
    }
?>
