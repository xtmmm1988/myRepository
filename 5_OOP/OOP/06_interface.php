<?php
		//为什么需要接口?
		//使用程序模拟现实情况
		//定义规范（方法/属性）
		header("content-type:text/html;charset=utf-8");
		interface iUsb{
				public function start();
				public function stop();
		}
		//编写相机类，让它去实现接口
		//1,当一个类实现了某个接口，则要求该类必须实现 这个无病呻吟的所有方法
		class Camera implements iUsb{
				public function start(){
						echo "相机开始工作";
				}
				public function stop(){
						echo "相机停止工作";
				}
		}
		//编写手机类
		class Phone implements iUsb{
				public function start(){
						echo "手机开始工作";
				}
				public function stop(){
						echo "手机停止工作";
				}
		}
		//如何使用
		//相机对象
		$camera1=new Camera();
		$camera1->start();
		echo "<br/>";
		$camera1->stop();
		echo "<br/>";
		//手机对象
		$phone1=new Phone();
		$phone1->start();
		echo "<br/>";
		$phone1->stop();
		/*1，接口的使用基本语法
				interface 接口名{
						//成员属性
						//成员方法
				}
			*接口的方法都不能有方法体
			2，如何去实现接口
				class 类名 inplements 接口名1，接口2...{
				
				}
				接口它的作用就是 声明一些方法，供其它类来实现 ，接口还体现编程中我们希望的效果高内聚低耦合的特点 
				3，深入讨论	
				什么情况下考虑使用接口
					1，定规范
					2，定下规范，让别的程序员来实现它
				    3，多个类，它们之间是平级的关系，这些类都要去实现某些功能，只是实现的方式不一样  


			 

		*/
?>