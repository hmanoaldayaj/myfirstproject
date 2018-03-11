<?php
$name= $_POST['txtName'];
$email= $_POST['txtEmail'];
$subject= $_POST['txtSubject'];
$message = $_POST['txtMessage'];
$from_add = 'abdulrahman@aldayaj.co.uk'; 
if(isset($_POST['txtName']) && 
	isset($_POST['txtEmail']) &&
	isset($_POST['txtSubject']) &&
	isset($_POST['txtMessage']))
	{
		$headers = "From: $from_add \r\n";
		$headers .= "Reply-To: $from_add \r\n";
		$headers .= "Return-Path: $from_add\r\n";
		$headers .= "X-Mailer: PHP \r\n";
   
		$body = "Your message has been received and we will get back to you soon";
		//Send
        $emailStatus = mail($email, $subject, $body, $headers);
        echo "Email Sent to Customer:" . $emailStatus;
        $body = "You have received a message from $email saying: $message";
        $emailConfirmationStatus = mail($from_add, $subject, $body, $headers);
        echo "Email Sent to Admin: $emailConfirmationStatus and the message says: $body";
        $_SESSION["message"] = "Message sent will get back to you asap";
        
        echo '<script>window.location.href = "index.html";</script>';
    exit();
		echo 'Enquiry has been sent!<a href="index.html">Click here to return to back</a>';
	}
	else{
		echo 'Please fill in all the details. <a href="index.html">Click here to return to back</a>';
	}
?>