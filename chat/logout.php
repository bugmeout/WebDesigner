<?php
require 'redirect.php';
$name= $_SESSION['user_name'];
require 'dbcon.php';
$str ="Update member set isonline= 0 where nickname='$name'";
mysql_query($str,$link_id);
$_SESSION=array();
session_destroy();
#what does this mean? windows.top.location , why it's not a new page but the content show in the frame of right-top area.
echo ("<script>window.top.location='index.php';</script>");
?>