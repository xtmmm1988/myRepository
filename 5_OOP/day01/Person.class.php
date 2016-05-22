<?php
 header('content-type:text/html;charset=utf-8');
			class Person{
				    //成员属性
					public $name;
					public $age;
					private $sex;

                   //成员方法
					public function speak(){
						echo "我是一个好人！";
					}
					function setSex($sex){
					      if($sex=="男"||$sex=="女"){
						          $this->sex=$sex;
						  }else{
						          $this->sex="男";
						  }
					}
					function __set($key,$value){
						  if($key=="sex"){
						       $this->setSex($value);
						  }
					}
					function __get($param){
					    return  $this->$param;
					}
				    public function count1(){
						$res=0;
						for($i=1;$i<=1000;$i++){
					          $res+=$i;
						}
						 return $res;
					}
					public function count2($n){
						$res=0;
					    for($i=1;$i<=$n;$i++){
						     $res+=$i;
						}
						 return $res;
					}
					public function add($a,$b){
						echo $res=$a+$b;
					}
					public function Findmax($arr){
						//假设一个最大值
						$maxVal=$arr[0];
						$maxIndex=0;
						for($i=1;$i<count($arr);$i++){
							if($maxVal<$arr[$i]){
							      $maxVal=$arr[$i];
								  $maxIndex=$i;
							}
						}
						return $maxVal;
					}
			}
		   $p1=new Person();
		   $p1->sex="男";
		   echo $p1->sex;
?>