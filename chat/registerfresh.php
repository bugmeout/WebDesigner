<?php
session_start();
$user_name= $_SESSION['user_name'];
require 'dbcon.php';
$name= $_POST['name'];
$password = $_POST['password1'];
$sex = $_POST['sex'];
$age= $_POST['age'];
$email = $_POST['email'];
#编码问题，没有解决掉。
$str = "update member set name='$name',password='$password',sex='$sex',age=$age,email='$email' where nickname='$user_name'";
echo $str;

$result= mysql_query($str,$link_id) or die("update error". mysql_error());
#header("Location:member_info.php");



?>