<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="10">
	<title>私聊记录</title>
</head>
<body>
	<?php
	require 'redirect.php';
	require 'dbcon.php';

	$user= $_SESSION['user_name'];
	$str = "select * from chat where reader='$user' order by time_created";
	$result = mysql_query($str,$link_id) or die("查不到您要的信息");

	$rows = mysql_num_rows($result);

	$long = 20;

	if ($rows < $long) {
	$l = $rows;
} else {
	mysql_data_seek($result, $rows-$long);
	$l = $long;
}
for ($i=1; $i <= $l; $i++) { 
	list($id,$author,$reader,$created_time,$text,$color) = mysql_fetch_row($result);
	echo "<table>";
	if ($text !="") {
		echo "<tr>";
		echo "<td align=left><font color=$color>";
		echo $created_time;
		echo "[".$author."]对你说:";
		echo $text;
		echo "</font></td>";
	}
	echo "</table>";
}
	?>
</body>
</html>
<?php
	mysql_close($link_id);
?>