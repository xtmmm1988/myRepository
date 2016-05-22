<?php
     header("content-type:text/html;charset=utf-8");
            //接收类文件
			require_once'Computer.class.php';
			//创建对象
			$computer1=new Computer();
			//调用方法
			$computer1->open();
			$computer1->computerSleep();
			$computer1->close();




?>