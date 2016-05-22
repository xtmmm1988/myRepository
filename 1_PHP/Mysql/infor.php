<?php
header('content-type:text/html;charset=utf-8');
$link=mysql_connect('localhost','root','');//链接数据库；
//var_dump($link);
mysql_select_db('zs');//链接使用哪个数据库；
//mysql_query('set names utf8');//执行显示编码；
mysql_set_charset('utf8');//设置客户端显示编码；
$sql='select id,name,pid from t1;';
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
$arr[]=$row;
}
//print_r($arr);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<table border="1px" align="center">
<tr><th>id</th><th>name</th><th>pid</th></tr>
<?php
  foreach($arr as $k=>$v){
?>
<tr>
<td><?php echo $v['id']?></td>
<td><?php echo $v['name']?></td>
<td><?php echo $v['pid']?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>