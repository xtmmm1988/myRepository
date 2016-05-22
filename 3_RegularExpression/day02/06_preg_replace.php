<?php
header("content-type:text/html;charset=utf-8");
$subject="这是一个有网址的字符串http://www.baidu.com这是一个有网址的字符串http://www.taobao.com这是一个有网址的字符串http://www.youdao.com";
$pattern="/(https?|ftps?):\/\/(\w+)\.(.*?)\.(com|reg|cn)/";
$replace="<a href='\\1://\\2.\\3.\\4'>\\1://\\2.\\3.\\4</a>";
echo $subject;
echo "<br/>";
echo preg_replace($pattern,$replace,$subject);

?>