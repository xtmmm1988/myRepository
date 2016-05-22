<?php
      //创建画布
	  $img=imagecreatetruecolor(200,200);
	  //画图
	  //创建颜色
	  $red=imagecolorallocate($img,255,0,0);
	  $blue=imagecolorallocate($img,0,0,255);
	  //填充
	  imagefill($img,0,0,$blue);
	  //画线
	  imageline($img,0,0,200,200,$red);
	  //输出
	  header('content-type:image/png');
	  imagepng($img);
	  //清理
	  imagedestroy($img);

?>