<?php
date_default_timezone_set('PRC');
// 关联+关联的二维数组
echo '<pre>';
print_r($_FILES);
echo '</pre>';

echo '<br/>';
/* echo $_FILES['pic']['name'];
 echo '<br/>';
echo $_FILES['pic']['type'];

echo '<br/>';
echo $_FILES['pic']['tmp_name'];

echo '<br/>';
echo $_FILES['pic']['error'];

echo '<br/>';
echo $_FILES['pic']['size']; */

//(1)获得上传文件的名称
$filename = $_FILES['pic']['name'];
//(2)获得文件扩展名
$ext = substr($filename,strrpos($filename,'.')+1);
//（3）上传文件重命名
$filename = date('YmdHis').mt_rand(1000,9999).'.'.$ext;
//echo $filename;
//(4)获得上传文件临时的文件位置
$tmpname = $_FILES['pic']['tmp_name'];
//（5）获得上传文件报错信息
$error =$_FILES['pic']['error'];
//(6)将上传文件临时的文件位置移动到目标位置
if($error==0){
	move_uploaded_file($tmpname,  'upload/'.$filename);
}
