<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>聊天记录</title>
</head>
<body>
	<?php 
	require 'redirect.php';
	require 'dbcon.php';
	echo "<h1><font color=#cc3300><em>公聊部分:</em></font></h1>";
	$str = "select * from chat where reader='everyone' order by time_created";
	$result = mysql_query($str,$link_id) or die("公聊信息查询失败 ".mysql_error());
	$row = mysql_num_rows($result);
	$long = 30;

	if ($row < $long) {
		$l = $row;
	} else {
		#mysql_data_seek($result,$num)是从第num处开始定位，这样数量就是all-num了。all-num表示查询其后num项
		mysql_data_seek($result, $row-30);
		$l = $long;
	}
		for ($i=1; $i <= $l; $i++) { 
			#list($author,$created_time,$text)= mysql_fetch_row()这个是错的，row只能一次取一行，只是list是以变量方式接收到一起，如果真
			#是这样，那么，这里数据库查询出来的id就赋值给了$author;
			list($id,$author,$reader,$created_time,$text,$color)= mysql_fetch_row($result);
			echo "<table>";
			if ($text != "") {
				echo "<tr>";
				echo "<td align=left><font color=$color>";
				echo $created_time;
				echo "[".$author."]对所有人说:";
				echo $text;
				echo "</font></td></tr></table>";
			}
		}
		mysql_close($link_id);
	?>
</body>
</html>