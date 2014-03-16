<!doctype html>
<html lang="en">
<head>
<meta http-equiv="refresh" content="10">
	<meta charset="UTF-8">
	<title>显示用户留言</title>

</head>
<body>


	<?php
require 'redirect.php';
require 'dbcon.php';

$str = "select * from chat where reader = 'everyone' order by time_created;";
$result= mysql_query($str,$link_id) or die("信息查询失败".mysql_error());

///////////////////////////////////////////
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
		echo "[".$author."]对所有人说:";
		echo $text;
		echo "</font></td>";
	}
	echo "</table>";
}

?>
</body>
</html>