<?php
//获取图片信息
$fillename="dog.jpg";
list($width,$height,$type)=getimagesize($fillename);
$type_array=array(1=>"gif",2=>"jpeg",3=>"png");
$type_str=$type_array[$type];
//拼装函数
$image_function="imagecreatefrom".$type_str;
$img=$image_function($fillename);
//获取缩放图片
$new_width=100;
$new_height=100;
$new_img=imagecreatetruecolor($new_width,$new_height);
//画图
/*
 * imagecopyresampled(resource $des_img,
                  resource $src_img,
                 int $des_x,int $des_y,
                 int $src_x,int $src_y,
                 int $des_width,int $des_height,
                 int $src_width,int $src_height)
 */
imagecopyresampled($new_img,$img,0,0,0,0,$new_width,$new_height,$width,$height);
header("content-type:image/png");
imagepng($new_img);
imagedestroy($img);
imagedestroy($new_img);



















?>