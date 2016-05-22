<?php
		header("content-type:text/html;charset=utf-8");
		//引入父类
		include_once"Person.class.php";
         //定义类
		 class Teacher extends Person{
				//定义成员属性
				public $job;
				//定义构造方法
				function  __construct($job,$age,$name,$sex){
						$this->name=$name;
					    $this->age=$age;
						$this->sex=$sex;
						$this->job=$job;
				}
				//定义成员属性
				function say(){						
						echo "我叫".$this->name."，我是个".$this->sex."人；我今年".$this->age."岁，我还是一个".$this->job;
				}
		 }

		 $t=new Teacher("学生","28","夏伟","男");
		 echo $t->job;
		 echo "<br/>";
		 $t->say();
?>