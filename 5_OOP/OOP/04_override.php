<?php
		//成员方法的覆盖应用
		//当一个父类知道所有的子类都有一个方法，但是父类此时无法确定该方法究竟如何去写；可以让子类覆盖该方法具体用法如下：
		header("content-type:text/html;charset=utf-8");
		//抽象一个Animal类
		class Animal{
					//成员属性
					public $name;
					protected $price;
					//成员方法
					function cry(){
							echo "不知道动物怎么叫";
					}
		}
		class Dog extends Animal{
					//方法的覆盖（逻辑上的覆盖）
					//成员方法
					function cry(){
							echo "小狗汪汪叫...";
					}
		}
		class Pig extends Animal{
				//方法的覆盖（逻辑上的覆盖）
				//成员方法
				function cry(){
						echo "小猪哼哼叫...";
				}
		}
					
		
		$d1=new Dog();
		$d1->cry();
		echo "<br/>";
		$p1=new Pig();
		$p1->cry();
		/*关于方法重写的细节讨论：
		        1，要求子类的那个方法与父类的方法名字、参数列表的个数一模一样；但是并不要求参数的名称一样；
				2，如果子类要去调用父类的某个方法（public/protected），则可以用parent::方法名或父类名::方法名，甚至可以传参数；
				3，在实现方法的覆盖的时候，访问修饰符可以不一样；但是  子类的访问权限不能小于父类的访问权限；
		*/
		/*多态体现在什么地方？
					当子类没有覆盖父类的方法则 $d1->cry(); 调用的是父类，当子类覆盖了父类的方法，则调用自己的$d1->cry();
		*/
?>