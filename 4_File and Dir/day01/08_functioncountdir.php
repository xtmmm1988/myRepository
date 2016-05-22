<?php
header("content-type:text/html;charset=utf-8");
//统计目录和文件个数
$pathname="../GD";
$dir_count=0;
$file_count=0;
countDir($pathname);
echo "目录个数：". $dir_count;
echo  "<br/>";
echo "文件个数".$file_count;
function countDir($pathname){		
		global $dir_count;
		global $file_count;
		//打开目录
		$dir=opendir($pathname);
		while($filename=readdir($dir)){
			if($filename!="." && $filename!=".."){
			        $filename=$pathname."/".$filename;
					if(is_dir($filename)){
					      $dir_count++;
					     countDir($filename);
					}else{
					    $file_count++;
			  }
		  }
     }
				//关闭资源
				closedir($dir);
}
?>