<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$sender = 'moslehpourmina@gmail.com'; // replace with another sender email
		$phone = $_POST['phone'];
		$msg = 'msg placeholder';
		$numGenerator = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		$comfirmationNum = substr(str_shuffle($numGenerator), 0, 5);
		$receiver=$_POST['email']; // Receiver Email
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Comfirmation Number :".$comfirmationNum;
		$headers="From: ".$sender;

		if(mail($receiver, $subject, $headers)){
			echo "<h1>Request Submit Successfully! "." ".$name.", a comfirmation email will be sent to you shortly. Your Comfirmation number is " ." ".$comfirmationNum." . </h1>";
		}
		else{
			echo "Something went wrong... please try again. ";
		}
	}
?>
