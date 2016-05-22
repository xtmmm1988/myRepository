<?php
   //判断文件是否存在；如果存在，判断它是文件还是目录并且判断是否可读、写、执行
   header("content-type:text/html;charset=utf-8");
   $filename="../GD";
   if(file_exists($filename)){
	   echo "存在<br/>";
		 if(is_readable($filename)){
		  echo "文件可读";
		}else{
		  echo "文件不可读";
		}
		echo "<br/>";
		if(is_writable($filename)){
		  echo "文件可写";
		}else{
		  echo "文件不可写";
		}
		echo "<br/>";
		if(is_executable($filename)){
		  echo "文件可执行";
		}else{
		  echo "文件不可执行";
		}
		echo "<br/>";
       if(is_dir($filename)){
		   echo  "它是一个目录";
	   }elseif(is_file($filename)){
		   echo  "它是一个文件";
	   }
   }
?>