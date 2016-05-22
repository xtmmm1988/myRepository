<?php
    header("content-type:text/html;charset=utf-8");
			//目录资源的遍历
			$pathname="../GD/*";
			$arr=glob($pathname);
			foreach($arr as $filename){
			 echo $filename."<br/>";
			}
			$pathname="../GD";
			//打开目录
			$dir=opendir($pathname);
			while($filename=readdir($dir)){
		          if($filename!="." && $filename!=".."){
			              $filename=$pathname."/".$filename;
			     if(is_dir($filename)){
					 echo $filename."是一个目录<br/>";
			   }else{
				 echo $filename."是一个文件";
				 }
	  }
}
//关闭资源
closedir($dir);
?>