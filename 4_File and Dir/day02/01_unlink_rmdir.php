<?php
//删除非空目录
//rmdir删除空目录，unlink删除文件
header("content-type:text/html;charset=utf-8");
$pathname="test";
delDir($pathname);
function delDir($pathname){
        //判断文件是否存在
		if(file_exists($pathname)){
		      if(is_file($pathname)){
			       unlink($pathname);
				   exit;
			  }
		}else{
		     echo "目录不存在";
			 exit;
		}
		//打开目录
		$dir=opendir($pathname);
		//while循环
		while($filename=readdir($dir)){
		       //过滤"."和".."
			   if($filename!="."&&$filename!=".."){
			          //拼装完整的文件名称
					  $file=$pathname."/".$filename;
					  //判断是否是目录
					  if(is_dir($file)){
					       delDir($file);
					  }else{
                          unlink($file);
					  }
			   }
		}

		//关闭资源
		closedir($dir);
        rmdir($pathname);
}
?>