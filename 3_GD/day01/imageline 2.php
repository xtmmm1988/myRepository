<?php
		  //创建画布
		  $img=imagecreatetruecolor(500,500);
		  //画图
		  //创建颜色
		  for($k=1;$k<200;$k++){
		  $color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
		  $arr[$k]=$color;	  
		  }	
		 //print_r($arr);

		 $blue=imagecolorallocate($img,0,0,255);
		  //填充
		  //imagefill($img,0,0,$blue);
		  //画线	
		  for($j=1;$j<count($arr);$j++){
				$n=$arr[$j];	
				imageline($img,0,0,rand(0,500),rand(0,500),$n);
			}
		  
		  //输出
		  header('content-type:image/png');
		  imagepng($img);
		  //清理
		  imagedestroy($img);
?>
	