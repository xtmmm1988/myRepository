<?php
include 'inc/common.function.php';


echo '<pre>';
print_r($_FILES);
echo '</pre>';
// 将关联+关联的二维数组转为索引+关联的二维数组
foreach($_FILES as $val){
	$arr[] = $val;
	// $arr[0] = array('name'=>'1.jpg','type'=>'image/jpeg');
	// $arr[1] = array('name'=>'2.jpg','type'=>'image/jpeg');
	// ...
}
echo '<pre>';
print_r($arr);
echo '</pre>';


foreach($arr as $v){//$v 一维数组
	if($v['error']==0){
		// 1获得文件名称
		$filename =$v['name'];
		// 2.获得文件扩展名
		$ext = exTension($filename);
		//3 给文件重命名
		$filename = uuid().'.'.$ext;
		//4.将临时文件位置移动到目标位置上
		move_uploaded_file($v['tmp_name'], 'upload/'.$filename);
	}
}











