<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>验证码</title>
	<script type="text/javascript">
	function chkinput (form) {
		if (form.username.value=="") {
			alert("请输入您的昵称");
			form.username.select();
			return false;	
		}
		if (form.password.value=="") {
			alert("请输入您的密码");
			form.password.select();
			return false;
		}
		if (form.xym.value=="") {
			alert("请输入验证码");
			form.xym.select();
			return false;
		}
		if (form.xym.value != form.xyml.value) {
			alert("验证码输入错误");
			form.xym.select();
			return false;
		}
		return true;
	}
	</script>

 <script type="text/javascript">
var num1 =Math.round(Math.random() * 10000000);
var num = num1.toString().substr(0,4);
document.write("<img name = codeimg4 src='xym.php?num="+num.substr(0,1)+"'>");
 </script>
</head>
<body>
	
	<form name="form_login" method="post" action="chkLogin.php" onsubmit="return chkinput(this)">
	用户名<input type="text" name ='username' size='18'	class="input" >
	<br/>密码<input type="text" name="password" size='18' class="input">
	<br/>验证码<input type="text" name="xym" size ='6'	class="input">
	<input type="hidden" name="xyml"><br>
	<input type="submit" name="submit" value="登陆">
	<input type="reset" name="reset" value="重置">
	</form>

</body>
</html>