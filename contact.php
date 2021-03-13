<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	$number = $_POST['number'];

	$mailTo = "wadialten@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$number.".\n\n".$message;

	mail($mailTo, $subject, $txt);
	header("Location: php/mailsend.html");
}

?>