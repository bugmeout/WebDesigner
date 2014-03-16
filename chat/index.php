thinking: 为什么不能使用js呢。



<!doctype html>
<head>
	<title>用户登录</title>
<meta http-equiv="Content-type" content="text/html; charset = utf-8">
<script type="text/javascript">
	function NameGetFocus() {
		document.frmLogin.user_name.focus();
	}
	function checkVaild() {
		if (document.frmLogin.user_name.value=="") {
			alert("请输入您的id");
					document.frmLogin.user_name.focus();
			return false;
		}
		if (document.frmLogin.password.value=="") {
			alert("请输入您的password");
			document.frmLogin.password.focus();
			return false;
		}
		return true;
	}
</script>

</style>
</head>
<!-- <body background="bg.jpg" text="#000000" onLoad="NameGetFocus()"> 不能加函数括号，这是为什么-->
<body text="#000000" onLoad="NameGetFocus">
<div style="position:absolute; left:0; top:0; width:100%; height:100%">
	<img src="bg.jpg" alt="" width="100%" height="100%"></div>
<div style="position:absolute;">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table border="0" width="100%"	cellpadding="2" height="12">
	<tr>
		<td colspan="3" rowspan="6" valign="top"></td>
		<td colspan="2" valign="top"<h1 align="center"><strong><font color="#ccccff" size="10"><em>欢迎光临聊天室</em></font></strong></h1>
	<form action="check_user.php" name="frmLogin" method="post">
		<div align="center"><strong><font color="#ccccgg" size="4" >昵称</font></strong>：
<input type="text" name="user_name">
<strong><font color="#00aa55" size="4"> 密码</font></strong>:
<input type="password" name="password">
&nbsp;&nbsp;
<input type="submit" value="登录" name="cmdlogin" onclick="return checkVaild()">
</div>
	</form>
	<p align="center"><font color="#ff0066" size="4">如果这是您首次登录，系统将自动保存您的信息</font></p>
	<div align="center"></div></td>
	</tr>
</table>
</div>

	
</body>
</html>