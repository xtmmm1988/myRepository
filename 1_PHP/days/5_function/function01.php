<?php
/*为完成某一功能的程序指令（语句）的集合，称为函数；函数又分为系统函数和自定义函数。
*1，function 是一个关键字；
*2，jishuan 函数名（由程序员取名）
*3，$num1,$num2,$oper是函数的参数列表（形参）；参数是程序员与计算机沟通的媒介；
*4，参数的类型可以是任意类型；
*5，没值的参数叫必选参数，有值的参数是可选参数；必选参数必须在可选参数前面；
*6，实参：生存期：整个程序的执行范围；形参：生存期：函数调用执行范围；
*7 return 值;返回值：函数的执行结果，只有0个或1个，数据类型可以是任意类型，返回值的作用结束程序
*    的执行，并将控制权移交给调用函数的位置上，与函数的参数值没有必然联系；
*/
function jishuan($num1,$num2,$oper){//定义函数
	//$sre表示计算结果
	$sre=0;
	switch ($oper){		
		case "+":
			$sre=$num1+$num2;
			break;
	    case "-":
			$sre=$num1-$num2;
			break;
		case "*":
			$sre=$num1*$num2;
			break;
		case "/":
			$sre=$num1/$num2;
			break;
		default:
			break;
	}
	return $sre;//返回值
	
}
function abc($n){
	if($n>2){
		abc(--$n);
	}
	echo '$n='.$n.'<br/>';
}
abc(4);



