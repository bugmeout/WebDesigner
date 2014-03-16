<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<script type="text/javascript">	\
	// 无法注册li事件
	var lis= document.getElementsByTagName("li");
	for (var i = 0; i <lis.length; i++) {
		lis.index = i;
		lis.onclick = function(){
			alert(this.index);
		}
	}	 

	</script>
</head>
<body>
	<?php
		require 'dbconnect.php';
		$str = "select nickname from member where isonline=1";
		$result = mysql_query($str,$link_id);

		echo "<ul id = 'hello'>";
		while ($row = mysql_fetch_row($result)) {
			echo "<li>";
			echo "$row[0]";
			echo "</li>";
		}
		echo "</ul>";
	?>
  <form  name= "send" action="test.php" method="post">
  	<input type="hidden" name ="onliner" value="hello">
  </form>


</body>
</html>