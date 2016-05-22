<?php
		//抽象类的应用
		//为什么要设计抽象类这个技术？
		//1，在实际开发中，我们可能有这样一种类，是其它类的父类，但是它本身并不需要实例外化，主要用途是用于让子类来继承，这样以达到代码复//用，同时利于项目设计者，设计类。
		header("content-type:text/html;charset=utf-8");
		//抽象一个Animal类
		 abstract class Animal{
					//成员属性  
					public $name="abc";
					protected $price;
					//成员方法
					//这个方法没有方法体，这个方法主要是为了让子类去实现
					abstract function cry();
					public function getName(){
							echo $this->name
					}
		}
		class Cat extends Animal{
					
					//成员方法
					function cry(){
							echo "小猫喵喵叫...";
					}
		}
		$cat=new Cat();
		$cat->cry();
		$cat->getName();
		//抽象类的注意事项：
		/*1，抽象类的基本语法		  
					abstract 类名{
							//成员属性
							//成员方法
					}
			2，如果一个类使用abstract来修饰，则该类就是抽象类；如果一个方法被abstract修饰，那么它就是抽象方法【抽象方法不能有方法体】
			3，抽象类不能被实例化
			4，抽象类可以没有抽象方法，同时不断可以有实现了的方法 
			5，如果一个类中只要有抽象方法，则该类必须声明为抽象类
			6，如果B类继承了一个抽象类A，则在求B类实现从A类继承的所有抽象方法；
						<?php
									//这是一个抽象类
									abstract class A{
												abstract function test();
									}
									//B类要么自己抽象，或者实现从A类继承的抽象方法
									class B extends A{
												function test(){
														echo "我实现了A：test";
												}
									}
							？>
					

*/
?>