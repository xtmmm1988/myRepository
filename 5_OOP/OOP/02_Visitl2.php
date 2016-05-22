 <?php
		header("content-type:text/html;charset=utf-8");
		//定义一个人类
		class A{
				//成员属性
				private $n1;
				private $n2;
				private $n3;
				//成员方法
				//使用__set 方法来管理所有属性
				public function __set($pro_name,$pro_value){
							$this->pro_name=$pro_value;
				}
				//使用__get 方法可以获取所有的属性值 
				public function __get($pro_name){
							if(isset($pro_name)){
										echo $this->pro_name;
							}else{
										return null;
							}
				}
					
				
				
		}
		$a1=new A();
		$a1->n1="hello";
		echo $a1->n1;
?>