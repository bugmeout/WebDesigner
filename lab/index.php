<!-- php与mysql数据连接的相关代码。
 -->

<?php
require_once(".\include\conn.inc.php");

#一个form引发的错案
#$Sql = "select * form test";
$Sql = "select * from test";
$result = mysql_query($Sql);

while ($out = mysql_fetch_array($result,MYSQL_NUM)) {
		# code...
	echo " ".$out[0];
}
mysql_free_result($result);

?>