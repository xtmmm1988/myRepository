<?php
$fillename="dog.jpg";
$wm_fillename="little.gif";
watermarkImage($fillename,$wm_fillename);
function watermarkImage($fillename,$wm_fillename){
//获取大图片信息
list($width,$height,$type)=getimagesize($fillename);
$type_array=array(1=>"gif",2=>"jpeg",3=>"png");
$type_str=$type_array[$type];
$img_function="imagecreatefrom".$type_str;
$img=$img_function($fillename);
//获取小图片信息
list($wm_width,$wm_height,$wm_type)=getimagesize($wm_fillename);
$wm_type_str=$type_array[$wm_type];
$img_wm_function="imagecreatefrom".$wm_type_str;
$wm_img=$img_wm_function($wm_fillename);
$x=$width-($wm_width+20);
$y=$height-($wm_height+20);
imagecopy($img,$wm_img,$x,$y,0,0,$wm_width,$wm_height);
$header_str="Content-Type:image/".$type_str;
header($header_str);
$image="image".$type_str;
$image($img);
imagedestroy($img);
imagedestroy($wm_img);
}
?>