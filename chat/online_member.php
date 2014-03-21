
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="refresh" content="10">	
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<title>在线用户</title>
</head>
<body bgcolor="#bbbbbb">
<?php
require 'redirect.php';
require 'dbcon.php';

$str= "select nickname from member where isonline =1";
$result= mysql_query($str,$link_id) or die("mysql_member searching failed".mysql_error());
$int_num= mysql_num_rows($result);
echo "<h4><strong>当前在线".$int_num."人</strong></h4>";
echo "<table>";
while ($row=mysql_fetch_row($result)) {
	$name=$row[0];
	echo "<tr>";
	if ($name==$_SESSION['user_name']) {
		echo "<font color=#ff0000>";
		echo "</td>【$name";
		echo "】</td>";
		echo "</font>";
	} else {
		echo "</td>【";
		echo "<a href='member_info.php?mem_name=$name'"." target='_bank'>";
		echo "$name";
		echo "</a>";
		echo "】</td>";
	}
	echo "</tr>";
	
}
echo "</table>";
mysql_close($link_id);

?>
</body>
</html>