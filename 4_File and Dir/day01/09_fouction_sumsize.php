<?php
//文件大小统计
header("content-type:text/html;charset=utf-8");
$pathname="../GD";
echo sumSize($pathname)/pow(2,10);
function sumSize($pathname){
     //打开目录
	 $dir=opendir($pathname);
	 $size=0;
     while($filename=readdir($dir)){
	         //除去“.”和".."文件
			 if($filename!="." &&$filename!=".."){
			     //拼装相对应完整名称
				 $file=$pathname."/".$filename;
				 //判断是文件还是目录
				 if(is_dir($file)){
				       $size=sumSize($file);
				 }else{
				       $size+=filesize($file);
				 }
			 }
	 }
    //关闭资源
	closedir($dir);
	return $size;
}
?>