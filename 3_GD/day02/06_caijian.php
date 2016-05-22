<?php
//图片缩放应用举例
//获取图片信息
$filename = "dog.jpg";
list($width,$height,$type) = getimagesize($filename);
$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
$type_str =  $type_array[$type];
//拼装获取图片资源的函数
$image_funtion = "imagecreatefrom".$type_str;
$old_img = $image_funtion($filename);

//获取缩放后的图片资源
$new_width = 100;
$new_height = 100;
$new_img = imagecreatetruecolor($new_width,$new_height);

//画图
/*
 * imagecopyresampled(resource $des_img,
                  resource $src_img,
                 int $des_x,int $des_y,
                 int $src_x,int $src_y,
                 int $des_width,int $des_height,
                 int $src_width,int $src_height)
 */
imagecopyresampled($new_img,$old_img,
                   0,0,220,220,100,100,$width,$height);




//展示
header("Content-Type:image/gif");
imagegif($new_img);

//清理
imagedestroy($new_img);
imagedestroy($old_img);
?>











