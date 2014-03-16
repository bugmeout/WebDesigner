<?php
require("redirect.php");

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>聊天室</title>
	</head>
	<frameset cols="82%,*">
		<frameset rows="78%,*">
			<frameset rows="24%,*">
				<frame src="public_info.php" name="public">
				<frameset cols="50%,*">
					<frame src="chat_display.php" name="chat_display">
					<frame src="chat_private.php" name="private">
				</frameset>
			</frameset>
			<frame src="speak.php" name="speak">
		</frameset>
		<frameset rows="69%,*">
			<frame name="top" src="online_member.php">
			<frame name="exit" src="exit.php">
		</frameset>
	</frameset>
</html>
