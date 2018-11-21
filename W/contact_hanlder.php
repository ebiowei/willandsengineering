<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['Name'];
		$email = $_POST['email'];
		$number = $_POST['Mobile-Number'];
		$message = $_POST['Message'];

		$to = 'godspowerehioze@gmail.com';
		$subject = 'New Contact Message';
		$message = "Name: ".$name."\n". "Phone Number: ".$number."\n". "Message: ".$message."\n\n";
		$headers = "From: ".$email;

		if (mail($to, $subject, $message, $headers)) {
			echo "<h1> Sent Sucessfully! Thank you". " " .$name. ", We will contact you shortly";
		}else{
			echo "Something went wrong!";
		}
	}
?>