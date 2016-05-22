<?php
$fillename="dog.jpg";
$img=imagecreatefromjpeg($fillename);
$imginfo=getimagesize($fillename);
$width=$imginfo[0];
$height=$imginfo[1];
$font=5;
$string="hello world";
$x=$width-(imagefontwidth($font)*strlen($string)+10);
$y=$height-(imagefontheight($font)+10);
$color=imagecolorallocate($img,200,200,200);
$white=imagecolorallocate($img,255,255,255);
imagestring($img,$font,$x,$y,$string,$color);
imagestring($img,$font,$x-2,$y-2,$string,$white);
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);

?>