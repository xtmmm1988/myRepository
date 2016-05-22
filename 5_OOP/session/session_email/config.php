<?php
		//开启session
		session_start();
		header("content-type:text/html;charset=utf-8");
		//数据库配置信息
		const DSN="mysql:host=localhost;dbname=zs";
		const DBUSERNAME="root";
		const DBPWD="";
		//判断用户是否登录
		function isLogin(){
			if(!(isset($_SESSION['islogin'])&&$_SESSION['islogin']==1)){
				header("location:login.php");
			}
		}

?>