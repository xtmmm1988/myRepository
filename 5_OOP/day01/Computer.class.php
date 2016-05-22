<?php
       //属性：品牌、颜色、cpu型号、内存容量、硬盘大小、价格、工作状态
	   //方法：打开、休眠、关机
	   //创建一个计算机，调用打开、关闭方法
	   class Computer{
				   //属性
				   public $brand;
				   public $color;
				   public $cpu;
				   public $memory;
				   public $hardDisksize;
				   public $price;
				   public $status;
				  //方法
				  function open(){
				  echo "计算机开机......<br/>";
				  }
				  function computerSleep(){
				  echo "计算机休眠中.....<br/>";
				  }
				  function close(){
					echo "计算机已关机.......";
				  }
	   }

?>