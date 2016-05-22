<?php
		header("content-type:text/html;charset=utf-8");
		//定义一个矩形类
		class Rectangle extends Chart{
				//定义成员属性
						public $width;
						public $height;
						public $name="矩形";
				//构造方法赋初值
				function __construct($array=array()){
						if(!empty($array)){
								$this->width=$array['width'];
								$this->height=$array['height'];
						}
				}
		
				//继承抽象类的成员方法，计算周长
				//（长+宽）*2
				function girth(){
						$girth=($this->width+$this->height)*2;
						return $girth;
				}
				//继承抽象类的成员方法，计算面积
				//长*宽
				function area(){
						$area=$this->width*$this->height;
						return $area;
				}
				//继承抽象类的成员方法，显示界面
				function show(){
					   $form="<form action='' method='post'>";
					   $form.=$this->name."的宽：<input type='text' name='width' /><br/>";	
				       $form.=$this->name."的高：<input type='text' name='height' /><br/>";
					   $form.="<input type='submit' value='计算'/><br/>";
					   $form.="</form>";
						return  $form;
						}
		}
?>