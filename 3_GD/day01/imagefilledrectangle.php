<?php
//创建画布
$img=imagecreatetruecolor(200,200);
//创建颜色
$color=imagecolorallocate($img,225,222,222);
$red=imagecolorallocate($img,250,0,0);
//填充
imagefill($img,0,0,$color);
imagerectangle($img,50,50,130,120,$red);
imagefilledrectangle($img,10,10,20,30,$red);
//输出
header("content-type:image/png");
imagepng($img);
//清理
imagedestroy($img);
?>