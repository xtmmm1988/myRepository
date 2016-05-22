<?php
		header("content-type:text/html;charset=utf-8");
		$dsn="mysql:host=localhost;dbname=zs";
		$username="root";
		$password="";
		$pdo=new PDO($dsn,$username,$password);
		//创建sql语句
		$sql="select name,age,email from users";
		$statm=$pdo->prepare($sql);
		$statm->setFetchMode(PDO::FETCH_ASSOC);
		$statm->execute();
		//var_dump($statm->fetch());exit;
		echo "<table width='300px' border='1px'>";
		echo "<tr><th>姓名</th><th>年龄</th><th>邮箱</th></tr>";
		while($row=$statm->fetch()){
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['age']."</td>";
					echo "<td>".$row['email']."</td>";									
					echo "</tr>";
		}
		echo "</table>";
?>