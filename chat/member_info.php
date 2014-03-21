<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>查看用户资料</title>
	</head>
	<body>
	<div align="Center">
			<p><font color="#990000" size="6">用户资料</font></p>
		<p>&nbsp;</p>
	</div>

	<?php
	require 'redirect.php'; 

	require 'dbcon.php';
		$user=$_SESSION['user_name'];
		if(!empty($_GET))
			$user=$_GET['mem_name'];
	$str= "select * from member where nickname='$user';";
	$result= mysql_query($str,$link_id);
	list($id,$nickname,$name,$password,$sex,$age,$email)= mysql_fetch_row($result);
	?>

	<div align="center">
	<!--单引号加$user符号不能显示数据。要么不加，要么加双引号<p> <font color="#000099" size="5">您的id:<?php echo '$user'?> </font></p>  -->
	<!-- <p> <font color="#000099" size="5">您的id:<?php echo "$user"?> </font></p> -->
		<p> <font color="#000099" size="5">您的id:<?php echo $user?> </font></p>
		<p> <font color="#000099" size="5">用户名:<?php echo $name?> </font></p>
		<p> <font color="#000099" size="5">性别:<?php echo $sex?> </font></p>
		<p> <font color="#000099" size="5">您的年龄:<?php echo $age?> </font></p>
		<p> <font color="#000099" size="5">您的email:<?php echo $email?> </font></p>
	</div>
	</body>
</html>