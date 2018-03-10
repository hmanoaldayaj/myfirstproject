<?php
$name= $_POST['txtName'];
$email= $_POST['txtEmail'];
$subject= $_POST['txtSubject'];
$message = $_POST['txtMessage'];
if(isset($_POST['txtName']) && 
	isset($_POST['txtEmail']) &&
	isset($_POST['txtSubject']) &&
	isset($_POST['txtMessage']))
	{

		echo 'Enquiry has been sent!<a href="index.html">Click here to return to back</a>';
	}
	else{
		echo 'Please fill in all the details. <a href="index.html">Click here to return to back</a>';
	}
?>