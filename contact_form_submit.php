<?php
if(isset($_POST['email'])) {
	
	$email_to = "gabriellemarhue@hotmail.com";
	$email_subject = "Portfolio Contact Form";
	
	fuction died($error){
		echo "Sorry, there were errors on your form";
		echo $error;
		die();		
	}
}

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<?php
}
die();
?>