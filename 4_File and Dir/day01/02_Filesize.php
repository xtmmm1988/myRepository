<?php
        $filename="../GD/GD.txt";
      echo  getFilesize($filename);
          //获取文件大小
		  function getFilesize($filename){
		       $dw="";
			   $size=filesize($filename);
			   if($size>=pow(2,40)){
			             $dw="TB";
						 $size=$size/pow(2,40);
			   }elseif($size>=pow(2,30)){
			             $dw="GB";
						 $size=$size/pow(2,30);
			   }elseif($size>=pow(2,20)){
			             $dw="MB";
						 $size=$size/pow(2,0);
			   }elseif($size>=pow(2,10)){
			             $dw="KB";
						 $size=$size/pow(2,10);
			   }else{
			             $dw="bytes";
						 $size=$size/pow(2,10);
			   }
			        return $size."<br/>".$dw;
		  }
        
?>