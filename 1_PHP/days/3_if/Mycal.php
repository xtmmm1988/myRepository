<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="result1.php" method="post">
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