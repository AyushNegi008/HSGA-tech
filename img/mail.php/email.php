<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email= $_POST['email'];
	$message= $_POST['message'];

	$email_from='EasyTutorial@avinsker.com';

	$email_subject="New Form Submition";

	$email_body="User Name: $name.\n".
					"User Email: $email.\n".
					"User Message: $message.\n";


	$to = "ayush.negi082004@gmail.com";

	$headers = "From: $email_form\r\n";

	$headers = "Reply-To: $email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location:thankyou.html");
?>