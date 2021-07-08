<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$organization=$_POST['organization'];
		$message=$_POST['message'];

		$to='sam.tang@focusyouth.ca';
		$subject='Form Submission';
		$msg="Name :".$name."\n"."Organization :".$organization."\n"."Message: "."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $msg, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>