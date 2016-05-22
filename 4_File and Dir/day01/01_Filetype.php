<?php
header("content-type:text/html;charset=utf-8");
$filename="File.txt";
//filetype($filename);返回值：file dir link 
echo filetype($filename);
//filesize($filename);返回文件大小
echo filesize($filename);
?>