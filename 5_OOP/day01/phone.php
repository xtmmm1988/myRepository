<?php
		//引入一个类
		require_once'Moblile.class.php';
		//创建一个对象
		$m1= new Mobile();
		//对成员属性赋值
		$m1->name="meizu";
		//$m1->voltage=220;
		echo $m1->name;
		echo "<br/>";
		//调用成员方法
		$m1->call();	
		echo "<br/>";
		$v1=new  Mobile();
		$v1->setVoltage(300);
		$v1->showVoltage();
?>