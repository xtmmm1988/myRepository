<?php
     $fillename="dog.jpg";
	 $string="hello world";
	 function watermark($fillename, $string){
	 $imginfo=getimagesize($fillename);
	 $width=$imginfo[0];
	 $height=$imginfo[1];
	 $type=$imginfo[2];
     $type_array=array(1=>"gif",2=>"jpeg",3=>"png");
	 $type_str=$type_array[$type];
     $font=5;	 
	 $image="imagecreatefrom".$type_str;
	 $img=$image($fillename);
	 $color=imagecolorallocate($img,200,200,200);
	 $white=imagecolorallocate($img,255,255,255);
	 $x=$width-(imagefontwidth($font)*strlen($string)+20);
	 $y=$height-(imagefontheight($font)+20);
	 imagestring($img,$font,$x,$y,$string,$color);
	 imagestring($img,$font,$x-2,$y-2,$string,$white);
	 $header_str="content-type:image/".$type_str;
	 header($header_str);
	 $image_str="image".$type_str;
	 $image_str($img);
	 imagedestroy($img);
	 }	 
	watermark($fillename, $string);
?>