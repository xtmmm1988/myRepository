<?php
header('content-type:text/html;charset=utf-8');
//连接数据库；
$link=mysql_connect('localhost','root','');
//打开数据库；
mysql_select_db('zs');
//设置编码；
mysql_query('set names utf8');
//mysql_query('set addrs utf8');
//执行增、删、改、查；
$sql='select id,name,age,sex,email,addr from users;';
$result=mysql_query($sql);
//将结果集转为数组
while($row=mysql_fetch_assoc($result)){
	$arr[ ]=$row;
}
//获取结果集的总条数
$num=mysql_num_rows($result);
//释放结果集
mysql_free_result($result);
//关闭数据库
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> new document </title>
  <meta name="generator" content="editplus" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
 </head>
 <body>
  <?php
    if($num>0){
  ?>
  <table border="1" align="center">
  <tr><th>姓名</th><th>性别</th><th>年龄</th><th>邮箱</th><th>地址</th><th>操作</th></tr>
  <?php
       foreach($arr as $k=>$v){
  ?>
  <tr>
        <td><?php echo $v['name']?></td>
        <td><?php
                if($v['sex']==0){
                   echo '男';	
                }else{
                   echo '女';
                }
             ?>
        </td>
        <td><?php echo $v['age']?></td> 
        <td><?php echo $v['email']?></td>
		<td><?php echo $v['addr']?></td>
        <td>
            <a href="delAction.php?id=<?php echo $v['id']?>">删除</a>
            <a href="edit.php?id=<?php echo $v['id']?>">修改</a>
        </td>
     </tr>
     <?php	
       }
     ?>
   </table>
<?php 
}else{
	echo '没有产品数据';
}
?>
 
 </body>
</html>
