<?php
		header("content-type:text/html;charset=utf-8");
		//pdo 的应用举例
		$dsn="mysql:host=localhost;dbname=zs";
		$username="root";
		$password="";
		$pdo=new PDO($dsn,$username,$password);
		//$sql="update users set name='xtt' where id=2";
		$sql="insert into users(name,password ,age,sex,email,addr) values ('夏伟1','123','20','1','123@qq.com','深圳');";
		$pdo->exec($sql);
		echo $pdo->lastInsertId();
?>