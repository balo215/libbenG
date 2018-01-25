<?php
	
	function sendEmail(){
		$to      = 'balo215@hotmail.com';
		$subject = 'the subject';
		$message = 'hello';
		$headers = 'From: libben@example.com';
		if(mail($to, $subject, $message, $headers))
			echo "yes";
		else{
			echo "false";
		}
	}

	$action = $_POST["type"];
	switch ($action) {
		case 'subscribe':
				sendEmail();
				return true;
				
			break;
		
		default:
				echo "something bad happened";
			break;
	}

	

?>
