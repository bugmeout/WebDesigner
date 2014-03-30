<?php

require 'dbconn.php';
//login test.
if(isset($_POST))
{
	$usernam=$_POST['user'];
	$pas=$_POST['pass'];
	$qstr="select * from user_info where uname='$usernam' and pass='$pas'";
	//echo $qstr;
	$res=mysql_query($qstr,$link_id) or die(mysql_error());
	$nu= mysql_num_rows($res);
	if ($nu==1) {
		echo "<h1>Welcome to home,".$usernam."</h1>";
	}
	else{
		// script添加多行效果无效，比如添加中文:用户名或密码错误
		echo "<script>alert('用户名或密码错误');window.location='login.html';</script>";
	}

}
mysql_close($link_id);

?>