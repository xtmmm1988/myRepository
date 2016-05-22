<?php
     header('content-type:text/html;charset=utf-8');
      //创建画布
	  $img=imagecreatetruecolor(200,200);
	  //画图
	  //创建颜色
	  $color=imagecolorallocate($img,225,225,225);	  
	  $red=imagecolorallocate($img,250,0,0);	  
	  //填充
	  imagefill($img,0,0,$color);
	  //写字
	  $string="中国，你好";
	  imagettftext($img, 20,0,30,100,$red,"simsun.ttc",$string);
	  //输出
	  header('content-type:image/png');
	  imagepng($img);
	  //清理
	  imagedestroy($img);

?>