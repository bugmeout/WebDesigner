<?php
session_start();
$user_name= $_POST['user_name'];
$pwd =$_POST['password'];
$_SESSION['user_name']=$user_name;

require("dbcon.php");
$str ="select nickname,password from member where nickname='$user_name'";
$result = mysql_query($str, $link_id) or die("query failed.".mysql_error());
$rows = mysql_num_rows($result);

if ($rows != 0) {
	list($name,$password)=mysql_fetch_row($result);

	if ($password==$pwd) {
		$str= "update member set isonline=1 where nickname ='$name' and password = '$password'";
		$result = mysql_query($str,$link_id);
		echo "<script>location.href='main.php';</script>";
	} else {
				echo "<script>alert('Wrong password');location.href='index.php';</script>";
	}
}
else{
	$str ="insert into member(nickname,password,isonline) values('$user_name','$pwd',1)";
	mysql_query($str,$link_id);
	echo "<script>location.href='main.php'</script>";
}
mysql_close($link_id);
?>