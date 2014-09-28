<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Mail Test</title>
</head>
<body>
	<?php
		if (isset($_REQUEST['email'])) {
			# code...
			$email = $_REQUEST['email'];
			$subject = $_REQUEST['subject'];
			$message = $_REQUEST['message'];
			mail("wulame@foxmail.com", "Subject:$subject", $message, "From: $email");
			echo "Thank you for using our mail form";
		} else {
			# code...
			echo "<form method = 'post' action = 'mailform.php'>
			Email: <input type='text' name ='email'/><br/>
			Subject:<input type='text' name ='subject'/><br/>
			Message:<br/>
			<textarea name='message' id='' cols='40' rows='15'></textarea><br/>
			<input type='submit' />
			</form>";
		}
		
	?>



</body>
</html>
