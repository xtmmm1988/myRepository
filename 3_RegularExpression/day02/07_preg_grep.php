<?php
header("Content-Type:text/html;charset=utf-8");
//正则查找
$subject=array("this","a");
$pattern="/a/";
echo "<pre>";
print_r(preg_grep($pattern,$subject));
echo "</pre>";
?>