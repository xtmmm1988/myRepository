<?php
//判断文件的属性：读、写、执行
header("content-type:text/html;charset=utf-8");
$filename="02_filesize.php";
if(is_readable($filename)){
  echo "文件可读";
}else{
  echo "文件不可读";
}
echo "<br/>";
if(is_writable($filename)){
  echo "文件可写";
}else{
  echo "文件不可写";
}
echo "<br/>";
if(is_executable($filename)){
  echo "文件可执行";
}else{
  echo "文件不可执行";
}
?>