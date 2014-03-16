<?php
require 'redirect.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta  http-equiv="Content-Type" Content= "text/html;charset=UTF-8">
	<title>退出</title>
</head>
<body bgcolor="#bbbbbb">
<p><a href="member_info.php" target="_bank"><strong>我的资料</strong></a></p>
<p><a href="register.php" target="_bank"><strong>修改个人信息</strong></a></p>
<form name="frmExit" method="post" action="logout.php">
	<input type="submit" name="cmdExit" value="离开系统">
</form>


	
</body>
</html>