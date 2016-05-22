<?php
//用户登录页面
		include "mysql.php";
		if($_POST){
					$username = isset($_POST['username'])?$_POST['username']:"";
					$password = isset($_POST['password'])?$_POST['password']:"";
					if($username==""){
								echo "用户名不能为空";
								exit;
					}
					if($password==""){
								echo "密码不能为空";
								exit;
					}					
					//连接数据库，判断用户名和密码是否匹配
					$sql="select id,name from users where name=:name and password=:password";
					//PDO通知mysql做准备
					$statm = $pdo->prepare($sql);
					//PDOStatement 绑定参数
					$statm->bindParam("name",$username);
					$statm->bindParam("password",$password);
					//PDO通知mysql查询
					$statm->execute();
					//判断是否查询到数据，如果查询到数据，那么证明登录成功
					$count = $statm->rowCount();
					if($count==1){
						//保存用户信息到session
						list($id,$username) = $statm->fetch(PDO::FETCH_NUM);		
						$_SESSION['username']=$username;
						$_SESSION['id'] = $id;
						$_SESSION['islogin'] = 1;
						header("location:show.php");		
					}else{
						echo "登录失败";
					}
					
			
		}
 
?>
<html>
<head>
<title>用户登录页面</title>
</head>
<body>
<center>用户登录</center><br/>
<div align="center">
<form action="login.php" method="post">
<input type="text" name="username" placeholder="用户名" /><br/>
<input type="password" name="password"  placeholder="密码"/><br/>
<button type="submit" >登录</ button>
</form>
</div>
</body>
</html>
