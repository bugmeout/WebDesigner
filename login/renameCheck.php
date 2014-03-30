<?php

require 'dbconn.php';
//ajax
if ( isset($_GET['name'])) {
	$usernam=$_GET['name'];
	$query_str = "select * from user_info where uname='$usernam'";
	$result = mysql_query($query_str,$link_id) or die(mysql_error());
	$num = mysql_num_rows($result);
	echo $num;
}
mysql_close($link_id);
?>