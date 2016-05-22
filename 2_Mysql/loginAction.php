<?php
header('content-type:text/html;charset=utf-8');
//获取$user的值
$user=$_REQUEST['user'];
//获取$pwd的值
$pwd=$_REQUEST['pwd'];
//连接数据库
$link=mysql_connect('localhost','root','');
mysql_select_db('zs');
mysql_query('set names utf8'); 
//执行增、删、改、查语句
$sql="select name,password from users where name='{$user}' and password='{$pwd}'";
$result=mysql_query($sql);
//获取总条数
$count=mysql_num_rows($result);
//影响行数
mysql_free_result($result);
//关闭数据库
mysql_close();
if($count>0){
	?>
<script>
alert('登录成功');
location.href='info.php';
</script>
<?php
}else{
?>
<script>
alert('登录失败');
location.href='login.html';
</script>
<?php
}
?>

