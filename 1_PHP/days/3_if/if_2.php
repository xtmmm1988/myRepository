
<?php 
header('Content-Type:text/html;charset=utf-8');
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$oper=$_REQUEST['oper'];
$res=0;
if(is_numeric($num1)&&is_numeric($num2)){
		       if($oper=='+'){
				echo '运算结果是'.$res=$num1+$num2;	
			  }elseif($oper=='-'){
			  	echo '运算结果是'.$res=$num1-$num2;
			  }elseif($oper=='*'){
			  	echo '运算结果是'.$res=$num1*$num2;
			  }elseif($oper=='/'){
				  	if($num2!=0){
				  		echo '运算结果是'.$res=$num1/$num2;
				  	}else {
				  		echo '0不能做除数';
				  	}
			  }elseif($oper=='%'){
				  	if($num2!=0){
				  		echo '运算结果是'.$res=$num1%$num2;
				  	}else {
				  		echo '0不能做除数';
				  	}
			  }
			  
	}else{
		echo exit('此操作不合法');
}

?>
<br/>
<a href="Mycal.php">返回计算器</a>

