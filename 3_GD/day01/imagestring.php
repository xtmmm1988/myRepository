<?php
      //创建画布
	  $img=imagecreatetruecolor(200,200);
	  //画图
	  //创建颜色
	  $color=imagecolorallocate($img,225,225,225);	  
	  $red=imagecolorallocate($img,250,0,0);	  
	  //填充
	  imagefill($img,0,0,$color);
	  //写字
	  $string="hello php";
	  imagestring($img,5,60,90,$string,$red);
	  //输出
	  header('content-type:image/png');
	  imagepng($img);
	  //清理
	  imagedestroy($img);

?>