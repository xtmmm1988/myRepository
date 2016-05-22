<?php
	header('content-type:text/html;charset=utf-8');

	//获取数据
	$id=$_REQUEST['id'];
	$user=$_REQUEST['user'];
	$pwd=$_REQUEST['pwd'];
	$age=$_REQUEST['age'];
	$sex=$_REQUEST['sex'];
	$email=$_REQUEST['email'];
	$addr=$_REQUEST['addr'];

	//连接数据库
	$link=mysql_connect('localhost','root','');
	//打开数据库
	mysql_select_db('zs');
	//设置编码
	mysql_query('set names utf8');

	//执行sql语句
	$sql="update users set name='{$user}',password='{$pwd}',age='{$age}',sex='{$sex}',email='{$email}',addr='{$addr}' where id=".$id;
	mysql_query($sql);
	//获取增删改影响行数
	$count=mysql_affected_rows();
	//判断
	if($count>0){
		?>
	<script>
	alert('修改成功')；
	location.href='info.php';	
	</script>
 <?php
}
//关闭数据库
mysql_close();
?>


 