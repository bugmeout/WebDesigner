<?php
echo __FILE__;
$a = 1;
echo "<br>";
echo $a;
echo "$a";
echo '$a';
echo "test'$a'";
echo ("凡是有双引号的，全部按照\$值输出，单引号只是表示单引号而已");
echo "-----------------------------------<br>";
$var_str = "var_str_rename";
$var_str_rename ='hello wrold!';
echo $$var_str;

echo "<from action='test.php' method ='post'>";
echo "<input type='text' name='text'>";
echo "<input type ='submit' name='sub' value='submit'>";
echo "</form>";
define ("pi",3.1415);
	function Encrypt($str){
		return $str = $str+pi;
	}
	function Decrypt($str){
		return $str = $str-pi;
	}

if ($_POST[sub]) {
	echo "加密口令:".Encrypt-----------------------------------------
}
?>