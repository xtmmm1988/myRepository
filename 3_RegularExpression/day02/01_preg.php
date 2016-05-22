<?php
header("Content-Type:text/html;charset=utf-8");
//用户注册过滤 
if($_POST){
	   //收录用户的信息
	   $user=isset($_POST["user"])?$_POST["user"]:"";
	   $password=isset($_POST["pwd"])?$_POST["pwd"]:"";
	   $email=isset($_POST["email"])?$_POST["email"]:"";
	   $phone=isset($_POST["phone"])?$_POST["phone"]:"";
	   if($user==""){
		      echo "用户名不能为空";
			  exit;
	   }
	   if($password==""){
			echo "密码不能为空";
			exit;
	   }
	   if($email==""){
			echo "邮箱不能为空";
		    exit;
	   }else{
	        //判断邮箱是否合法
			$pattern="/\w+([.-]?\w+)?@\w+\.(com|cn|tw|net)/";
			preg_match($pattern,$email,$match);
			if(empty($match)){
					echo "邮件地址不合法";
					exit;	
			}
	   }
	   if($phone==""){
	       echo "手机号码不能为空";
		   exit;
	   }else{
	       //判断手机号码是否合法
		   $pattern="/^1[356789]\d{9}$/";
		   preg_match($pattern,$phone,$match);
		   if(empty($match)){
			       echo "手机号码不合法";
				   exit;
		   }
	   }
     echo "注册成功";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<form action="01_preg.php" method="post">
<table>
	<tr><td>用户名</td><td><input type="text" name="user"/></td></tr>
	<tr><td>密码</td><td><input type="password" name="pwd"/></td></tr>
	<tr><td>邮箱</td><td><input type="text" name="email"/></td></tr>
	<tr><td>手机号码</td><td><input type="text" name="phone"/></td></tr>
	<tr><td colspan="2"><input type="submit" value="注册"></td></tr>
</table>
</form>
</body>
</html>