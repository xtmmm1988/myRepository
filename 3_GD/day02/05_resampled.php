<?php
//图片缩放处理函数
$filename = "dog1.jpg";
$new_width = 50;
$new_height = 50;
thumb($filename,$new_width,$new_height);
function thumb($filename,$new_width,$new_height){
	//获取图片信息
	list($width,$height,$type) = getimagesize($filename);
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	$type_str = $type_array[$type];
	//获取图片资源
	$image_function = "imagecreatefrom".$type_str;
	$old_img = $image_function($filename);
	
	//获取新的图片资源
    $new_img = imagecreatetruecolor($new_width,$new_height);
    //图片的缩放
    imagecopyresampled($new_img,$old_img,
                       0,0,0,0,
                       $new_width,$new_height,
                       $width,$height);
    //显示
    header("Content-Type:image/gif");
    imagegif($new_img);
    //清除、清理
    imagedestroy($new_img);
    imagedestroy($old_img);
	
} 
?>







