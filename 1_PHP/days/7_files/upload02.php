<?php
include 'common.function.php';
//require 'inc/common.function.php';
//(1)获得上传文件的名称
$filename = $_FILES['pic']['name'];
//(2)获得文件扩展名
$ext = exTension($filename);
//（3）上传文件重命名
$filename = uuid().'.'.$ext;
//echo $filename;
//(4)获得上传文件临时的文件位置
$tmpname = $_FILES['pic']['tmp_name'];
//（5）获得上传文件报错信息
$error =$_FILES['pic']['error'];
//(6)将上传文件临时的文件位置移动到目标位置
if($error==0){
	move_uploaded_file($tmpname,  'upload/'.$filename);
}




