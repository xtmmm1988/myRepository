<?php
         header("content-type:text/html;charset=utf-8  ");
        //定义类
		class Person{
		       //成员属性
			   public $name;
			   protected $age;
			   private  $sex;
			   static $country="中国";

			   //定义构造方法
			   function __construct($name,$age,$sex){
								$this->name=$name;
								$this->age=$age;
								$this->sex=$sex;
			   }
			   //定义一个魔术方法
			   function __call($a,$b){
				   echo "不存在";
			   }
			   function __clone(){
					echo "我是克隆魔术方法";
			   }
			   //定义成员方法
			   function say(){
						echo "I can side";
			   }
		
		}
		$p=new Person("夏伟","20","男");
		$p1=clone $p;
		echo "<br/>";
		echo Person::$country="美国";
?>