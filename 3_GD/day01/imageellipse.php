<?php
$img=imagecreatetruecolor(200,200);
$color=imagecolorallocate($img,222,222,222);
$red=imagecolorallocate($img,250,0,0);
imagefill($img,0,0,$color);
imageellipse($img, 100,100,100,100,$red);	
imagefilledellipse($img, 100,100,50,50,$red);	
header("content-type:image/png");
imagepng($img);
imagedestroy($img);
?>