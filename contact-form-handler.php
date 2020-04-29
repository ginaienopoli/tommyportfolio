<?php

if (isset ($_POST ["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$mailTo = "ginaienopoli@gmail.com"
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name."./n/n".$message;

	if(mail($email, $subject, $messgae, $headers)){
		echo "<h1> Sent Succesfully! Thank you".;
	}
	else{
		echo "Something went wrong!";
	}
	
	}
?>