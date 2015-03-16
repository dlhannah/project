<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tele = $_POST['telephone'];
    $message = $_POST['message'];
  	$to = 'dhannahb5683@yahoo.com'; 
    $subject = 'Hello';
    
    $body = "From: $name\n E-Mail: $email\n Telephone: $tele\n Message:\n $message";

	if ($_POST['submit']) {
    	if (mail ($to, $subject, $body)) { 
        	echo '<p>Your message has been sent!</p>';
    	} 
    	else { 
        	echo '<p>Something went wrong, go back and try again!</p>'; 
    	}
	}
    
?>