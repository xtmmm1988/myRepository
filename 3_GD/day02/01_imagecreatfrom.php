<?php
$fillename="dog.jpg";
$img=imagecreatefromjpeg($fillename);
$color=imagecolorallocate($img,200,200,200);
$white=imagecolorallocate($img,255,255,255);
imagestring($img,5,610,570,"hello word",$color);
imagestring($img,5,608,568,"hello word",$white);
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy;
?>