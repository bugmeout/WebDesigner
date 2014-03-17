<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>

<form action="test.php" method="post">
	<input type="text" value="姓名" name="name">
	</br>
	
	<input type="text" value="想要说的话" name="message">
	</br>
	<input type="submit" value="确认" name="submit">
</form>


	<?php
		require 'conn.php';
		$name= $_POST['name'];
		$text = $_POST['message'];
	//	$str = "insert into info value('$name',"."\"$text\")";
		//$str = "insert into info values('$name',\""."'$text'\")";
		$str  = "insert into info values('$name','$text')";
		echo $str;
		mysql_query($str,$link_id);
	?>

</body>
</html>