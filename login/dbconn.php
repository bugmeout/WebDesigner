<?php
$link_id = @mysql_connect('localhost','root','root') or die ("Could not connect the database".mysql_error());

@mysql_select_db(member_info,$link_id) or die("Database connection failed".mysql_error());
?>