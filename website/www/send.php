<?php
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$message = $_POST['message']; 
	
	$headers = "Form: $email\r\nReply-To: $email\r\nContent-type: text\html;charset=utf-8\r\n";
	mail("th.gns61@gmail.com", $name, $message, $headers)
?>