<?php

//register member to the database table.
require 'dbconn.php';
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['mail'];

$insert_str="insert into user_info(uname,pass,email) values('$user','$pass','$email')";
mysql_query($insert_str,$link_id);
echo "<script>alert('注册成功');</script>";
echo "<script>location.href='login.html'</script>";




?>