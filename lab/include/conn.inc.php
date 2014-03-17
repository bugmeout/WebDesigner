<?php
require_once("config.inc.php");

$conn = mysql_connect($host,$user,$pass);

if (!$conn) {
	# code...
	die("MySqlCan't connected.".mysql_error());
}

mysql_select_db($database);


?>