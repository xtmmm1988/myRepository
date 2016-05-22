<?php
$fillename="dog.jpg";
$direct="y";
overturn($fillename,$direct);
function overturn($fillename,$direct){
//获取图片信息
list($width,$height,$type)=getimagesize($fillename);
$type_array=array(1=>"gif",2=>"jpeg",3=>"png");
$type_str=$type_array[$type];
//函数的拼接
$image_function="imagecreatefrom".$type_str;
//获取图片资源
$img=$image_function($fillename);
//创建新的资源图片
$new_img=imagecreatetruecolor($width,$height);
	if($direct=="x"){
		for($i=0;$i<$width;$i++){
         imagecopy($new_img,$img,$width-($i+1),0,$i,0,1,$height);
		}
		}elseif($direct=="y"){
	  $i=0;
	  while($i<$height){
	  imagecopy($new_img,$img,0,$height-($i+1),0,$i,$width,1);
	  $i++;
	  }
	  }
	


//输出
header("content-type:image/png");
imagepng($new_img);
//清除
imagedestroy($img);
imagedestroy($new_img);
}
?>