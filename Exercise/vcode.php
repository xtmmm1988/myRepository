<?php
     $width=60;
	$height=30;
	$img=imagecreatetruecolor($width,$height);
	//背景颜色
	$color=imagecolorallocate($img,255,255,255);
	//$color=imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
    imagefill($img,0,0,$color);
    $codes="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	$code="";
	$num=4;
	for($i=0;$i<$num;$i++){
		//字体颜色
         $font_color=imagecolorallocate($img,0,0,0);
	   // $font_color=imagecolorallocate($img,rand(0,150),rand(0,150),rand(0,150));
		$start=rand(0,strlen($codes)-1);
		$code=substr($codes,$start,1);
		$x=($width/$num)*$i+5;
		$y=rand(10,15);
		imagestring($img,5,$x,$y,$code,$font_color);
	}
	//制作干扰
	//干扰线
 /* $i=1;
  while($i<=10){
  $line_color=imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
  imageline($img,rand(1,79),rand(1,29),rand(1,79),rand(1,29),$line_color);
  $i++;
  }
  //干扰点
  $i=1;
  while($i<=100){
  $speck_color=imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
  imagesetpixel($img,rand(1,79),rand(1,29),$speck_color);
  $i++;
  }*/
header("content-type:image/png");
imagepng($img);
imagedestroy($img);

?>
