<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发言</title>
</head>
<body>
	<?php require 'redirect.php';
		  require 'dbcon.php';

		  if (isset($_POST['slt_people'])) {
		  	$reader=$_POST['slt_people'];
		  } else {
		  	$reader="anyone";
		  }
		  
		  if (isset($_POST['slt_text_color'])) {
		  	switch ($_POST['slt_text_color']) {
		  		case 'red':
		  			$color='red';
		  			break;
		  		case 'blue':
		  			$color='blue';
		  			break;
		  		case 'gray':
		  			$color='gray';
		  			break;
		
		  		default:
		  			$color='black';
		  			break;
		  	}
		  } 

		  if (isset($_POST['text']) && $_POST['text']!='') {
		  	{
		  		$author= $_SESSION['user_name'];
		  		$time = date("Y-m-d H:i:s");
		  		$text = $_POST['text'];
		  		// 无法解决用户输入逗号的问题。
		  	$str = "insert into chat(author,reader,time_created,text,color) values('$author','$reader','$time','$text','$color')";
		  	
		  	mysql_query($str,$link_id) or die("chat information checked failed".mysql_error());
		  	}
		  }
	?>

<table width="632" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="632" height="80" valign="top">
		<form action="speak.php" method="post" target="_self">
			<font color="#000000"><strong>选择对象:</strong></font>
			<select name="slt_people" size="1">
				<?php
					if (isset($slt_people)) {
				?>	
				<option selected><?php echo $slt_people;}?></option>
				<option >everyone</option>

				<?php
					$author = $_SESSION['user_name'];
					$str = "select nickname from member where nickname !='$author'";
					$result = mysql_query($str,$link_id) or die("查询联系人失败".mysql_error());
					while ($row = mysql_fetch_row($result))	 {
						echo "<option>";
						$name = $row[0];
						echo $name;
						echo "</option>";
					}
				?>
			</select>
			&nbsp;&nbsp;&nbsp;
			<font color="#00000"><strong>选择颜色:</strong></font>
			<select size="1" name="slt_text_color">
			<!--php判断的用法-->
			<?php
			if (isset($slt_text_color)) {
				?>
			<option selected><?php echo $slt_text_color;}?></option>
			<option >red</option>
			<option >blue</option>
			<option >gray</option>
			</select>
			</p>
			<p><strong>内容:</strong>&nbsp;
			<input type="text" name="text" size="40">
			<input type="submit" name="submit" value="发言">
			<a href="chat_history.php" target="_bank"><strong>聊天记录</strong></a></p>

		</form>
	</td>
</tr>

<tr>
	<td height="3"></td>
</tr>
 </table>

</body>
</html>
<?php mysql_close($link_id)?>