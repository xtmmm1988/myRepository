<?php
		//接口的定义
		interface Demo{
		//成员属性，只能有常量
		conts WEB="www.baidu.com";
		//成员方法，只能有抽象方法且不能用abstract关键字
		function say();
		}
?>