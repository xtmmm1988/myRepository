<?php
             //收入类文件
			 require_once'Person.class.php';
		    //创建对象
			$p1=new Person();
			//通过对象去访问，调用成员方法。
			//这里强调，调用成员方法和调用普通的函数机制，仍然不变。
			$p1->speak();
			echo "<br/>";
			//让这个人算算术题
            echo $p1->count1();
			echo "<br/>";
			//让这个人接受一个数，然后再计算
			echo $p1->count2(100);
			echo "<br/>";
			echo $p1->add(28,31);
			echo "<br/>";
			//把三个数放到数组中
			$myArr=array(1,5,9);
			echo $p1->Findmax($myArr);	
?>