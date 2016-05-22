<?php
         //获取文件时间
		 header("content-type:text/html;charset=utf-8");
		 $filename="../GD/GD.txt";
		 echo "文件的创建时间create:".date('Y-m-d H:i:s',filectime($filename));
		 echo "<br/>";
		 echo "文件的访问时间alert:".date('Y-m-d H:i:s',fileatime($filename));
		 echo "<br/>";
		 echo "文件的修改时间modify:".date('Y-m-d H:i:s',filemtime($filename));
		 echo "<br/>";

?>