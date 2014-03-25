<?php
 $a = "hello world";
 echo $a;
 
 echo "<form action =''method='post'>";
 echo "<input type = 'text' name='text' value='输入文本内容'>";
 echo "<input type = 'submit' name='sub' value='提交'>";
 echo "</form>";

 if ($_POST['sub']) {
 	if (stristr($a, $_POST['text']) !="") {
 		echo "<script>alert('文本中存在指定字符串')</script>";
 	} else {
 		echo "<script>alert('文本中不存在指定字符串')</script>";
 	}
 	
 }
?>