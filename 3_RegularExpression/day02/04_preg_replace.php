<?php
//正则表达式的替换
$subject="this is a test ";
$pattern="/t/";
$replace="w";
echo preg_replace($pattern,$replace,$subject);
?>