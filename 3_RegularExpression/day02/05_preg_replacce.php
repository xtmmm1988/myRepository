<?php
header("content-type:text/html;charset=utf-8");
//正则替换
$subject="我是一个带有<b>HTML</b>标签的<font color='pink'>字符串</font>";
$pattern="/<\/?[^<>]+>/";
$replace="";
echo $subject;
echo "<br/>";
echo preg_replace($pattern,$replace,$subject);
?>