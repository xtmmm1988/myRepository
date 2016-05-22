<?php
 //创建画布
      $img=imagecreatetruecolor(200,300);
//创建颜色
      $green= imagecolorallocate($img,255,0,0);
	  $black= imagecolorallocate($img,0,0,0);
//填充画布
     imagefill($img,0,0,$green);
//画点
imagesetpixel($img,100,150,$black);
//输出
//header("content-type:image/png");
imagepng($img,"2.png");
//关闭资源
imagedestroy($img);
?>