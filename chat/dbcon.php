<?php
$link_id = @mysql_connect("localhost","root","root") 
			or die("connection failed.". mysql_error());

@mysql_select_db("chat_db",$link_id)
			or die("Database connection failed".mysql_error());
?>