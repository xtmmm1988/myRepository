<?php
include 'common.function.php';

echo '<pre>';
print_r($_FILES);
echo '</pre>';

// 要将三维数组转为索引+关联的二维数组
//形如:
/*
 * array(
 *   0=>array('name'=>'1.jpg','type'=>'image/jpeg','size'=>3232),
 *   1=>array('name'=>'2.jpg','type'=>'image/jpeg','size'=>2321)
 * ); 
 * 
 */
foreach($_FILES as $val){ //$val 二维数组
	foreach($val['name'] as $k=>$v){
		  // $val['name'] 一维数组
		  // $k  0 1 2 3
		  // $v  1.jpg 2.jpg 3.jpg...
		 $arr[$k]['name']=$v;
		 $arr[$k]['type']=$val['type'][$k];
		 $arr[$k]['tmp_name']=$val['tmp_name'][$k];
		 $arr[$k]['error']=$val['error'][$k];
		 $arr[$k]['size']=$val['size'][$k];
		
	}
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












