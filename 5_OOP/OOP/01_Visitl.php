<?php
		header("content-type:text/html;charset=utf-8");
		//定义一个人类
		class Person{
				public $name;
				protected $age;
				private $salary;
				//定义构造方法，赋初值
				public function __construct($name,$age,$salary){
						$this->name=$name;
						$this->age=$age;
						$this->salary=$salary;
				}
				//查看薪水，对查看者进行校验
				public function getSalary($user,$pwd){
						if($user=="夏伟"&&$pwd=="123"){
									echo $this->salary;
						}else{
									echo "sorry，你无权查看";
						}
				}
				//修改年龄，对输入的值进行校验
				public function setAge($age){
						if($age>0 && $age<120){
									$this->age=$age;
						}else{					
									echo "sorry，你输入的年龄有误";
						}			
				}
				public function getAge(){
						return $this->age;
				}
				
		}
		$p1=new Person("夏伟",28,5000);
		echo $p1->getSalary("夏伟",123);
		echo "<br/>";
		echo $p1->setAge(25);
		echo $p1->getAge();
?>