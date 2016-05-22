<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="" method="post">
<table>
<tr><td>number1</td><td><input type="text" name="num1" /></td></tr>
<tr><td>number2</td><td><input type="text" name="num2" /></td></tr>
<tr>
	<td>运算符</td>
	<td>
	<select name="oper">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
	<option value="%">%</option>
	</select>
	</td>
</tr>
<tr><td colspan="2"><input type="submit" value="计算结果"/></td></tr>
</table>
</form>
</body>
</html>
<?php 
header('Content-Type:text/html;charset=utf-8');
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$oper=$_REQUEST['oper'];
$res=0;
if(isset($_REQUEST['num1'])){
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
}

?>

