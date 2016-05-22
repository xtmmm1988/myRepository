<?php
header('content-type:text/html;charset=utf-8');
//获取$user $pwd $age $sex $addr $email 的值
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
 mysql_query('set names urf8');
//执行mysql语句
$sql="insert into users (name,password,age, sex,email,addr ) values
          ('{$user}','{$pwd}','{$age}','{$sex}','{$email}','{$addr}')";
 //返回bool
 mysql_query($sql);
 //返回影响行数
 $count=mysql_affected_rows();
 //判断
 if($count>0){
	 ?>
 <script>
 alert('注册成功');
location.href='login.html';
 </script>
<?php
 }
//关闭数据库
 mysql_close();
?>
 