 <!doctype html>
 <html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
 	<title>用户注册</title>
 	<script type="text/javascript">
 	function NameGetFocus () {
 		document.frmModify.password.focus();
 	}
 	function CheckVaild () {	
 		if (document.frmModify.password.value=="") {
 			alert("password can't be null");
 			document.frmModify.password.focus();
 			return false;
 		}
 		else{
 			if (document.frmModify.password.value == document.frmModify.password2.value) {
 				document.frmModify.password.focus();
 				return true;
 			}
 			else{
 				alert("check your twice password.");
 				document.frmModify.password.focus();
 				return false;
 			}
 		}
 	}
 	</script>

 	<?php
 	require 'redirect.php';
 	$user_name= $_SESSION['user_name'];
 	require 'dbcon.php';
 	$str = "select name,password,sex,age,email from member where nickname='$user_name'";
 	$result = mysql_query($str,$link_id) or die("member information query failed".mysql_error());
 	list($name,$password,$sex,$age,$email) = mysql_fetch_row($result);
 
 	?>
 </head>
 <body background="">
 &nbsp;&nbsp;&nbsp;
 <div align="center"><font color="#ccccff" >用户列表</font>
<form name="frmModify" action="registerfresh.php" method="post">
	<table  border="1">
		<tr>
			<td>&nbsp;用户名</td>
			<td>&nbsp; <input type="text" name="name" size="80" value=<?php echo $name;?>></td>	
		</tr>
		<tr>
			<td>&nbsp;新密码</td>
			<td>&nbsp; <input type="password" name="password" size="30" value=<?php echo $password;?>></td>
		</tr>
		<tr>
			<td>&nbsp;密确认</td>
			<td>&nbsp; <input type="password"name="password1" size="30" value=<?php echo $password;?>> </td>
		</tr>

		<tr>
			<td>&nbsp;性别</td>
			<td>&nbsp; <input type="text"name="sex" size="30" value=<?php echo $sex;?>> </td>
		</tr>
		<tr>
			<td>&nbsp;年龄</td>
			<td>&nbsp; <input type="text"name="age" size="30" value=<?php echo $age;?>> </td>
		</tr>
		<tr>
			<td>&nbsp;E_mail</td>
			<td>&nbsp; <input type="text"name="email" size="30" value=<?php echo $email;?>> </td>
		</tr>
		<tr>
			<td colspan="8">
				<input type="reset" name="reset" value="重置">
			</td>
			<td  >
				<input type="submit" name="submit" value="提交" onclick="return CheckVaild">
			</td>
		</tr>
	</table>
</form>
 </div>
 	
 </body>
 </html>
 <?php
 mysql_close($link_id);
 ?>